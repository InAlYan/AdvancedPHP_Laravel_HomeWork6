<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    public $fillable = ['title',
                        'author',
                        'year_of_release',
                        'number_of_pages',
                        'genre'
    ];

}
