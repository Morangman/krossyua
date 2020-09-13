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

Route::get('/', 'HomeController@index')->name('home');

Route::post('/order', 'HomeController@makeOrder')->name('order');

Route::post('/comment', 'HomeController@addComment')->name('comment');

Route::group([
    'namespace' => 'Auth',
    'as' => 'admin',
    'prefix' => 'admin',
], static function () {
    require __DIR__.'/web/auth.php';
});