<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        return "this is sima";
    }

    function aboutUser($name){
        return "this is all about ". $name;
    }
}
