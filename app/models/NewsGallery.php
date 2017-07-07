<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class NewsGallery extends Model
{
    protected $fillable = [
        'image', 'news_id',
    ];
}
