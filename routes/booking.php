<?php

use App\Models\Property;
use Illuminate\Support\Facades\Route;

Route::view('/', 'booking.index')->name('home');
Route::view('about', 'booking.about')->name('about');
Route::get('sales', function () {
    $properties = Property::with('image')->paginate();
    return view('booking.sales', ['props' => $properties]);
})->name('sales');
Route::view('gallery', 'booking.gallery')->name('gallery');
Route::view('contact_us', 'booking.contact_us')->name('contact_us');
Route::view('404', 'booking.404')->name('404');
