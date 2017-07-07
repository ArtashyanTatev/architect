<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class OurMission extends Model
{
    protected $fillable = [
        'title_en', 'title_ru', 'title_hy', 'image'
    ];
}
