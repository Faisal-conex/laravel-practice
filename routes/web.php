<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

/*
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





//controllers
//contoller syntax Route:get("path", "controlelr file");
//so on the users path the Users.php file in the controller will be triggered

//Route::get("users", [Users::class, 'index']);

//we can also pass parameters
//Route::get("users/{user}", [Users::class, 'index']);


//pass value to controller which opens the view
// the user var will automatically be passed in loadView function within our controller
Route::get("users/{user}", [Users::class, 'loadView']);



































//