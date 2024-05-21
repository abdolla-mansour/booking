<?php

use App\Models\Room;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactUsController;

Route::view('/', 'booking.index')->name('home');
Route::view('about', 'booking.about')->name('about');

Route::get('sales', function () {
    $properties = Property::with('image')->paginate(2);
    return view('booking.sales', ['props' => $properties]);
})->name('sales');

Route::get('gallery/{id}', function ($id) {
    $property = Property::with('image')->find($id);

    if (!$property) {
        return redirect()->back();
    }

    $rooms = Room::with('image')->where('property_id', $id)->get();

    return view('booking.gallery', ['prop' => $property, 'rooms' => $rooms]);
})->name('gallery');

// make search in properties redirect sale
Route::post('search', [SearchController::class, 'search'])->name('search');
Route::post('search/home', [SearchController::class, 'search_home'])->name('search.home');

Route::view('contact_us', 'booking.contact_us')->name('contact_us');
Route::post('contact_us', [ContactUsController::class, 'create_message'])->name('contact_us.create');
Route::view('404', 'booking.404')->name('404');
