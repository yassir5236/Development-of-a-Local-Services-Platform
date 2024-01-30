<?php

use App\Http\Controllers\ServicesController;
// use App\Http\Controllers\ComputresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

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

Route::get('/',[StaticController::class,'index'] )->name('home.index');
// Route::get('/about/about',[StaticController::class,'about']  )->name('home.about');
// Route::get('/contact/email', [StaticController::class,'contact'] )->name('home.contact');

Route::resource('services', ServicesController::class );



// Route::get('/about/{coffee}/{see}', function ($coffee=null,$see=null) {
//     if (isset($coffee) && isset($see)){
//         return '<h1>'.$see. ' and ' .$coffee.'</h1>';
//     }
//     return '<h1> you are in about</h1>';
// });

// Route::get('/store', function () {
//     $filter = request('style');
//     if (isset($filter)){
//         return '<h1>this page is viewing '. strip_tags($filter).'</h1>';
//     }else{
//         return "You are viewing all products ";
//     }
    
// });

// Route::get('/', function () {
//    return view('welcome');  
// });
