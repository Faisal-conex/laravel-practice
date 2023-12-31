<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;


/*
@audit : bob
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//passing parameters and now the route / can accept the name parameter as well
/* Route::get('/{name}', function ($name) {

    //we can pass parameters to the VIEW through array
    //the key is the actual variable that is passed to the BLADE FILE
    return view('welcome', ['key' => $name]);
}); */

//longhand
/* Route::get('/about', function(){
    return view('about');
});
 */

//shorthand  /path, view
Route::view("about", "about");
Route::view("contact", "contact");
Route::view("profile", "profile");
Route::get("create-post", function () {
    return view("form");
});
Route::view("login", "login");
Route::view("noaccess", "noaccess");
Route::view("apiview", "apiview");

//hello;

//controllers
//contoller syntax Route:get("path", "controlelr file");
//so on the users path the Users.php file in the controller will be triggered

//Route::get("users", [Users::class, 'index']);

//we can also pass parameters
//Route::get("users/{user}", [Users::class, 'index']);


//pass value to controller which opens the view
// the user var wills automatically be passed in loadView function within our controller
Route::get("users/{user}", [Users::class, 'loadView']);
Route::get("profile/{user}", [ProfileController::class, 'init']);
Route::post("form-controller", [PostController::class, 'getData']);



//middleware groups 

Route::group(["middleware" => ["protectedPage_ageChecker"]], function () {
    Route::view("login", "login");
    Route::view("create-post", "form");
});


//single middleware
Route::view("admin", "admin")->middleware(['admin.checker']);



//Database connection
Route::get("users", [UserController::class, 'getData']);

Route::get("database", [DatabaseController::class, 'index']);

Route::get("api", [APIController::class, 'getAPI']);






















//