<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    //
    function index(){
        $query = "select name from users";
        
        return DB::select($query);
        
    }
}
