<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    const CREATED_AT = null;
    const UPDATED_AT = null;

    function textbooks() {
        return $this->hasMany('App\Models\Textbook');
    }
}
