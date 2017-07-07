<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name_hy', 'name_ru', 'name_en', 'image', 'link'
    ];

    public function products(){
        return $this->hasMany('App\models\Product','parent_id','id')->orderBy('id','desc');
    }
}
