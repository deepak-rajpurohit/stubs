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
}
