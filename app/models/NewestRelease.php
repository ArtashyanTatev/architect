<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class NewestRelease extends Model
{
    protected $fillable = [
        'title_hy', 'title_en', 'title_ru',
        'description_hy', 'description_ru', 'description_en',
        'header_hy', 'header_en', 'header_ru',
        'image'
    ];
}
