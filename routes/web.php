<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| ['only' => [
    'index', 'create', 'store',
]]
*/
Route::get('/', function () {
    return redirect('/main');
});
Route::resource('/main', 'MainController');
Route::resource('/modal', 'ModalController');
Route::post('/editquestion', 'ModalController@editquestion')->name('editquestion');

