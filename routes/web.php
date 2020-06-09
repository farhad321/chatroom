<?php

use App\Events\MessageSend;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    event(new MessageSend());

//    broadcast(new \App\Events\MessageSend(new \App\Message()));

//    dump(extension_loaded('redis'));
//    return phpinfo();
//    return view('welcome');
});

Route::get('message', 'AdminController@index');
Route::post('sendMessage', 'AdminController@sendMessage');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
