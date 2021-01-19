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
    return view('welcome');
});

Route::get('/msg',function(){
    return "Hello! World.";
});

Route::get('/add/{a}/{b}/test',function($a,$b){
    return $a+$b;
});

Route::get('/add/{a}/{b?}',function($a,$b=67){

    return "Add : ".$a+$b;
});

Route::get('blade',function(){
    return view('message'); 
});

Route::get('blades/msg',function(){
    return view('message',['user'=>'Nishant']); 
})->name('test');

Route::get('blade/add',function(){
    return view('message',['a'=>45,'b'=>46]); 
});

// Route::get('user/',[TestController::class,'index']);  //In Laravel 8

// // Route::get('controller','TestController@index'); laravel < 8
// Route::get('user/add',[TestController::class,'viewWithoutMessage']);


// Route::get('user/msg/{msg?}',[TestController::class,'viewWithMessage']);

// Route::get('user/redirect',[TestController::class,'redirects']);

Route::prefix('user')->group(function(){
    Route::get('/',[TestController::class,'index']);  //In Laravel 8

    // Route::get('controller','TestController@index'); laravel < 8
    Route::get('add',[TestController::class,'viewWithoutMessage']);


    Route::get('msg/{msg?}',[TestController::class,'viewWithMessage']);

    Route::get('redirect',[TestController::class,'redirects']);
});





