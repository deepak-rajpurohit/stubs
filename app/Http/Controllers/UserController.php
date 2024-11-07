<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    //
    function index(){
        return "This is from stubs";
    }

    function list(){
        return UserModel::all();
    }

    function save(){
        $user = new UserModel();
        $user->name='rahul';
        $user->email='rahual@email.com';
        $user->phone='123456';

        if($user->save()){
            echo "new user added";
        }
    }
}
