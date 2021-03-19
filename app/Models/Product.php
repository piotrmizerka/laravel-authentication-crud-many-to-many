<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Adding an array to allow mass assignment
    protected $fillable = [
        'name',
        'description'
    ];
}
