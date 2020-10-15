<?php

namespace App\Models;

use Answer;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answers(){
        return $this->hasMany('App\Models\Answer');
    }
}