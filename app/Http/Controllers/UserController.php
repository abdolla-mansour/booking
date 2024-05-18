<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;
use Intervention\Image\Drivers\Gd\Driver;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('image')->where('email', '!=', 'super_admin@app.com')->paginate();

        return view('pages.users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
            'image' => ['image', 'max:2024'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($request->hasFile('image')) {
            $img = $request->file('image');

            $manager = ImageManager::withDriver(Driver::class);
            $image = $manager->read($img)->cover(800, 800);

            $image_name = uniqid() . '.' . $img->getClientOriginalExtension();

            $image->save(public_path('users_image/' . $image_name));

            Image::create([
                'name' => $image_name,
                'imageable_type' => User::class,
                'imageable_id' => $user->id
            ]);

        }

        $users = User::with('image')->where('email', '!=', 'super_admin@app.com')->paginate();

        return to_route('dashboard.users.index', ['users' => $users]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.users.update', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            'image' => ['nullable', 'image', 'max:2024'],
        ]);

        $user = User::findOrFail($id);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];

        // Check if password is provided and update it if so
        if ($request->has('password')) {
            $user->password = Hash::make($validatedData['password']);
        }

        $user->save();

        if ($request->hasFile('image')) {
            if ($user->image) {
                $fileName = $user->image->name;
                Storage::delete('users_image/' . $fileName);

                $image = $request->file('image');

                $image_name = uniqid() . '.' . $image->getClientOriginalExtension();

                $manager = new ImageManager(new Driver);

                $img = $manager->read($image)->cover(800, 800);
                $img->save(public_path('users_image/' . $image_name));

                $image = Image::where('imageable_type', User::class)->where('imageable_id',  $user->id)->first();

                $image->name = $image_name;

                $image->save();

            } else {

                $image = $request->file('image');

                $image_name = uniqid() . '.' . $image->getClientOriginalExtension();

                $manager = ImageManager::withDriver(new Driver);
                $img = $manager->read($image)->cover(800, 800);

                $img->save(public_path('users_image/' . $image_name));

                Image::create([
                    'name' => $image_name,
                    'imageable_type' => User::class,
                    'imageable_id' => $user->id
                ]);

            }

        }

        $users = User::with('image')->where('email', '!=', 'super_admin@app.com')->paginate();

        return to_route('dashboard.users.index', ['users' => $users]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if ($user) {

            if ($user->image) {

                $fileName = $user->image->name;
                Storage::delete('users_image/' . $fileName);

                $image = Image::where('imageable_type', User::class)->where('imageable_id',  $user->id)->first();

                $image->delete();
            }

            $user->delete();
        }

        $users = User::with('image')->where('email', '!=', 'super_admin@app.com')->paginate();

        return to_route('dashboard.users.index', ['users' => $users]);
    }
}
