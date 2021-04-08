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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('about',function (){
    return view('about');
})->name('about');
Route::get('blog',function (){
    return view('blog');
})->name('blog');
Route::get('contact',function (){
    return view('contact');
})->name('contact');
Route::get('services',function (){
    return view('services');
})->name('services');
Route::get('single',function (){
    return view('single');
})->name('single');
Route::get('work',function (){
    return view('work');
})->name('work');
Route::get('work-single',function (){
    return view('work-single');
})->name('work-single');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
