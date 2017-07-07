<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'image',
        'text_hy', 'text_ru', 'text_en',
        'header_hy', 'header_en', 'header_ru'
    ];

    public function images(){
        return $this->hasMany('App\models\NewsGallery','news_id','id');
    }
}
