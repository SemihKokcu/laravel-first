<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\admin\adminController;
use \App\Http\Controllers\admin\publisher\publisherController;
use \App\Http\Controllers\admin\author\authorController;
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',function (){
    return view('home');
});

Route::group(['namepsace'=>'admin','prefix'=>'admin','as'=>'admin.'],function (){
    Route::get('/',[adminController::class,'index'])->name('index');

    Route::group(['namespace'=>'publisher','prefix'=>'publisher','as'=>'publisher.'],function (){
       Route::get('/',[publisherController::class,'index'])->name('index');
       Route::get('/create',[publisherController::class,'create'])->name('create');
       Route::post('/create',[publisherController::class,'store'])->name('create.post');
       Route::get('/edit/{id}',[publisherController::class,'edit'])->name('edit');
        Route::post('/edit/{id}',[publisherController::class,'update'])->name('edit.post');
        Route::get('/delete/{id}',[publisherController::class,'delete'])->name('delete');




    });
    Route::group(['namespace'=>'author','prefix'=>'author','as'=>'author.'],function (){
        Route::get('/',[authorController::class,'index'])->name('index');
        Route::get('/create',[authorController::class,'create'])->name('create');
        Route::post('/create',[authorController::class,'store'])->name('create.post');
        Route::get('/edit/{id}',[authorController::class,'edit'])->name('edit');
        Route::post('/edit/{id}',[authorController::class,'update'])->name('edit.post');
        Route::get('/delete/{id}',[authorController::class,'delete'])->name('delete');




    });
});



//Route::get('/admin',[indexController::class,'index']);
