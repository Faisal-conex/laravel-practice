<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function index(){
        echo "from user controller";
    }
    
    function getData(){
        return User::all();
    }
    
    
}
