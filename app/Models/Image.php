<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'imageable_type',
        'imageable_id',
    ];

    public $timestamps = false;

    public function imageable()
    {
        return $this->morphTo('imageable', 'imageable_type', 'imageable_id');
    }
}
