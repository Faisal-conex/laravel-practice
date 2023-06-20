<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    
    public function index($user){
        return [ 'name' => 'faisal', 'age' => 26];
    }
    
    
    public function loadView($user){
        return view("contact", ['user' => $user]); 

    }
    

}