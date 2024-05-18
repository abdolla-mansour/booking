<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Image;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return to_route('dashboard.props.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view('pages.rooms.create', ['property_id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'type' => 'required|string|' . Rule::in(['baderoom', 'bathroom', 'kitchen']),
            'image' => 'required|image',
            'property_id' => 'required|exists:properties,id',
        ]);

        $room = new Room;
        $room->title = $request->title;
        $room->description = $request->description;
        $room->type = $request->type;
        $room->property_id = $request->property_id;
        $room->save();

        $image = $request->file('image');

        $image_name = uniqid() . '.' . $image->getClientOriginalExtension();

        $manager = new ImageManager(new Driver);
        $image = $manager->read($image)->cover(356, 268);
        $image->save(public_path('rooms_image/' . $image_name));

        Image::create([
            'imageable_type' => Room::class,
            'imageable_id' => $room->id,
            'name' => $image_name,
        ]);

        return to_route('dashboard.rooms.show', $request->property_id);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('pages.rooms', ['rooms' => Room::where('property_id', $id)->get(), 'property_id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, $property_id)
    {
        $room = Room::find($id);
        return view('pages.rooms.update', ['room' => $room, 'property_id' => $property_id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'type' => 'required|string|' . Rule::in(['baderoom', 'bathroom', 'kitchen']),
            'property_id' => 'required|exists:properties,id',
            'image' => 'nullable|image',
        ]);

        $room = Room::find($id);
        $room->title = $request->title;
        $room->description = $request->description;
        $room->type = $request->type;
        $room->property_id = $request->property_id;
        $room->save();

        if ($request->hasFile('image')) {

            if ($room->image) {
                $fileName = $room->image->name;
                Storage::delete('rooms_image/' . $fileName);
            }

            $image = $request->file('image');
    
            $image_name = uniqid() . '.' . $image->getClientOriginalExtension();

            $manager = ImageManager::withDriver(Driver::class);
            $image = $manager->read($image)->cover(356, 268);
            $image->save(public_path('rooms_image/'. $image_name));

            $img = Image::where('imageable_type', Room::class)->where('imageable_id',  $room->id)->first();
            $img->name = $image_name;
            $img->save();
        }


        return to_route('dashboard.rooms.show', $request->property_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, $property_id)
    {
        $room = Room::find($id);

        if ($room->image) {
            Storage::delete('rooms_image/' . $room->image->name);
            Image::where('imageable_type', Room::class)->where('imageable_id', $room->id)->first()->delete();
        }

        $room->delete();

        return to_route('dashboard.rooms.show', $property_id);

    }
}
