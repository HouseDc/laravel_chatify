<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'name',
        'visibilty',
        'description',
        'in_stock',
        'stock',
        'low_stock',
        'price',
        'category',
        'brand',
        'image',
    ];
}
