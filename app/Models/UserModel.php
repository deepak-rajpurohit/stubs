<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model

{
    //
    // public $timestamp= false;
    function getNameAttribute($val){
        return ucfirst($val);

    }

    function getPhoneAttribute($val){
        return "+91-".$val;
    }
}
