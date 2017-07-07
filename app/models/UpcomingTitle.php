<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class UpcomingTitle extends Model
{
    protected $fillable = [
        'title_en', 'title_hy', 'title_ru'
    ];
}
