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
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\BookController;

Route::get('/', function () {
    echo "Ana Sayfa";
});
use App\Models\Book;
Route::get('/books',function (){

    $x = \App\Models\User::find(1);
    echo $x->fullname;

//$x = \App\Models\Book::find(1);
// $firstname = $x->name;
// echo $firstname;
//    Book::create(['name'=>'NEWWWeni kitapp','writerId'=>1]);





});



Route::resources([
    '/user'=> UserController::class,
    '/book'=>BookController::class,
]);

use \Illuminate\Support\Facades\DB;
//Route::get('/books',function (){
//    $books = DB::table('books')->truncate();
////    foreach ($books as $key=>$value){
////        echo "$value->id"."=>".$value->bookName."<br/>";
////    }
//});

