<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class MissionList extends Model
{
    protected $fillable = [
        'title_hy', 'title_en', 'title_ru', 'description_hy', 'description_ru', 'description_en'
    ];
}
