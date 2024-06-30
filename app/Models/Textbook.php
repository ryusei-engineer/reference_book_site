<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Textbook extends Model
{
    use HasFactory;

    function reviews() {
        return $this->hasMany('App\Models\Review');
    }

    function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
