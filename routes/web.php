<?php

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
    return view('layout.default');
});

Route::get('v2',function (){
    return view('layout2.default',['title'=>'v2']);
});

Route::get('test',function (){
   return view('test');
});

//
Route::get('/buggy','BuggyController@index');

Route::get('/feedback',function (){
   return view('feedback',['title'=>'問題回報']);
});

<<<<<<< HEAD

=======
Route::get('/emergency',function (){
   return view('emergency',['title'=>'緊急回報']);
});

Route::get('/member', 'MemberController@index');


Route::get('/test','BuggyController@index');

Route::post('result','BuggyController@result');
>>>>>>> 1819d8864073ff207c1bdb4492939aab30b5b5e6
