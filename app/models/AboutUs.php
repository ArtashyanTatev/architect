<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table='about_uses';
    protected $fillable = [
        'image',
        'title_hy', 'title_ru', 'title_en',
        'description_hy', 'description_ru', 'description_en',
        'header_en', 'header_ru', 'header_hy',
        'l1_hy', 'l1_ru', 'l1_en',
        'l2_hy', 'l2_ru', 'l2_en',
        'l3_hy', 'l3_ru', 'l3_en',
        'l4_hy', 'l4_ru', 'l4_en',
        'l5_hy', 'l5_ru', 'l5_en',
        'l6_hy', 'l6_ru', 'l6_en',
        'l7_hy', 'l7_ru', 'l7_en'
    ];
}
