<?php

use App\Http\Controllers\ContactUsController;
use App\Models\Room;
use App\Models\Property;
use Illuminate\Support\Facades\Route;

Route::view('/', 'booking.index')->name('home');
Route::view('about', 'booking.about')->name('about');

Route::get('sales', function () {
    $properties = Property::with('image')->paginate();
    return view('booking.sales', ['props' => $properties]);
})->name('sales');

Route::get('gallery/{id}', function ($id) {
    $property = Property::with('image')->find($id);
    $rooms = Room::with('image')->where('property_id', $id)->get();

    return view('booking.gallery', ['prop' => $property, 'rooms' => $rooms]);
})->name('gallery');

Route::view('contact_us', 'booking.contact_us')->name('contact_us');
Route::post('contact_us', [ContactUsController::class, 'create_message'])->name('contact_us.create');
Route::view('404', 'booking.404')->name('404');
