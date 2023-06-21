<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PostController extends Controller
{
    //
    function getData(Request $req){
    
        $req->validate([
            "post-title"=>'required | min:3',
            "post-description"=>'required | min:6',
        ]);
    
        return $req -> input();
    }
    
}
