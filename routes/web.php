<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',function (){
    return view('home');
});

Route::group(['namepsace'=>'admin','prefix'=>'admin','as'=>'admin.'],function (){
    Route::get('/',[\App\Http\Controllers\admin\indexController::class,'index'])->name('index');
    Route::group(['namespace'=>'publisher','prefix'=>'publisher','as'=>'publisher.'],function (){
       Route::get('/',[\App\Http\Controllers\admin\publisher\indexController::class],'index')->name('index');
    });
});



//Route::get('/admin',[indexController::class,'index']);
