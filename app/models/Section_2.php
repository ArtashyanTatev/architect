<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Section_2 extends Model
{
    protected $fillable = [
        'image',
        'title_en', 'title_ru', 'title_hy',
        'logo',
        'description_en', 'description_ru', 'description_hy'
    ];
}
