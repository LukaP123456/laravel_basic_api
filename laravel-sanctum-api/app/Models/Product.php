<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(\Illuminate\Http\Request $request)
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'name',
        'slug',
        'description'
    ];

//    protected $guarded = [];
}
