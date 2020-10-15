<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{

    public function questions(){
        return $this->hasMany('App\Models\Question');
    }
    
    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    // protected $fillable = [
    //     'name', 'email',
    // ];

    // /**
    //  * The attributes excluded from the model's JSON form.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password',
    // ];
}
