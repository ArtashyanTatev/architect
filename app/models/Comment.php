<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'email', 'name', 'product_id', 'comment', 'site'
    ];

}
