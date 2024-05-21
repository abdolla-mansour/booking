<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'count_rooms',
        'count_bedrooms',
        'count_bathrooms',
        'salary',
        'location',
        'property_type',
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
