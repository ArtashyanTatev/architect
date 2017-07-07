<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Section_6 extends Model
{
    protected $fillable = [
        'title_en', 'title_ru ', 'title_hy',
        'li1_hy', 'li1_en', 'li1_ru',
        'li2_hy', 'li2_en', 'li2_ru',
        'li3_hy', 'li3_en', 'li3_ru',
        'li4_hy', 'li4_en', 'li4_ru',
        'li5_hy', 'li5_en', 'li5_ru',
        'image'
    ];
}
