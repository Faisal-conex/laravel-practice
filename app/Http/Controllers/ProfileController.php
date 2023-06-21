<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
 
    public function init($user){
    
        $posts = ["A time in the winter", "A time in the summer", "In pakistan", "In a place far aawy"];
        
        return view("profile", ["firstname"=>$user, "posts" => $posts]);
    }
    
}
