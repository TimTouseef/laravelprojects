<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/greeting', function () {
    echo "<h1> 'Hello World dear Touseef Ahmed Abbasi</h1>";
    echo "<marquee> 'Hello World dear Touseef Ahmed Abbasi</marquee>";
    echo "<Table> 'Hello World dear Touseef Ahmed Abbasi</table>";

});
Route::match(['get', 'post'], '/', function () {
    // ...
});
 
Route::any('/', function () {
    // ...
});



//Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
//});

Route::get('/user/{name?}', function (?string $name = null) {
    return $name;
});
 
Route::get('/user/{name?}', function (?string $name = 'John') {
    return $name;
});