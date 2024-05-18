<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Property;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

use function PHPUnit\Framework\isNull;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $props = Property::all();
        return view('pages.properties', ['props' => $props]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.properties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'count_rooms' => ['required', 'integer', 'min:1', 'max:100'],
            'count_bedrooms' => ['required', 'integer', 'min:1', 'max:100'],
            'count_bathrooms' => ['required', 'integer', 'min:1', 'max:100'],
            'salary' => ['required', 'integer'],
            'image' => ['required', 'image'],
        ]);

        $property = Property::create([
            'title' => $request->title,
            'description' => $request->description,
            'count_rooms' => $request->count_rooms,
            'count_bedrooms' => $request->count_bedrooms,
            'count_bathrooms' => $request->count_bathrooms,
            'salary' => $request->salary,
        ]);

        $image = $request->file('image');

        $image_name = uniqid() . '.' . $image->getClientOriginalExtension();

        $manager = ImageManager::withDriver(Driver::class);
        $img = $manager->read($image)->cover(270, 180);
        $img->save(public_path('properties_image/'. $image_name));

        Image::create([
            'name' => $image_name,
            'imageable_type' => Property::class,
            'imageable_id' => $property->id
        ]);

        $props = Property::all();
        return to_route('dashboard.props.index', ['props' => $props]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('pages.properties.update', ['prop' => Property::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $property = Property::find($id);
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'count_rooms' => ['required', 'integer', 'min:1', 'max:100'],
            'count_bedrooms' => ['required', 'integer', 'min:1', 'max:100'],
            'count_bathrooms' => ['required', 'integer', 'min:1', 'max:100'],
            'salary' => ['required', 'integer'],
            'image' => ['image'],
        ]);

        $property->title = $validatedData['title'];
        $property->description = $validatedData['description'];
        $property->count_rooms = $validatedData['count_rooms'];
        $property->count_bedrooms = $validatedData['count_bedrooms'];
        $property->count_bathrooms = $validatedData['count_bathrooms'];
        $property->salary = $validatedData['salary'];

        $property->save();

        if ($request->hasFile('image')) {

            if ($property->image) {
                $fileName = $property->image->name;
                Storage::delete('properties_image/' . $fileName);
            }

            $image = $request->file('image');

            $image_name = uniqid() . '.' . $image->getClientOriginalExtension();

            $manager = new ImageManager(new Driver);
            $img = $manager->read($image)->cover(270, 180);
            $img->save(public_path('properties_image/' . $image_name));

            $image = Image::where('imageable_type', Property::class)->where('imageable_id',  $property->id)->first();

            $image->name = $image_name;

            $image->save();
        }

        $props = Property::all();
        return to_route('dashboard.props.index', ['props' => $props]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        $fileName = $property->image->name;
        Storage::delete('properties_image/' . $fileName);

        $image = Image::where('imageable_type', Property::class)->where('imageable_id',  $property->id)->first();

        $image->delete();

        $property->delete();

        $props = Property::all();
        return to_route('dashboard.props.index', ['props' => $props]);
    }
}
