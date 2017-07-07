<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'product_id', 'image'
    ];
}
