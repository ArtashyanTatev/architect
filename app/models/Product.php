<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title_hy', 'title_ru', 'title_en',
        'description_hy', 'description_ru', 'description_en',
        'parent_id'
    ];

    public function images(){
        return $this->hasMany('App\models\Gallery','product_id','id');
    }
    public function parent(){
        return $this->belongsTo('App\models\Category','parent_id','id');
    }
}
