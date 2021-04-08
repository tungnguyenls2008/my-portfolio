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


Route::resource('abouts', App\Http\Controllers\AboutController::class);

Route::resource('stories', App\Http\Controllers\StoryController::class);

Route::resource('goals', App\Http\Controllers\GoalController::class);

Route::resource('testimonies', App\Http\Controllers\TestimonyController::class);

Route::resource('skills', App\Http\Controllers\SkillController::class);

Route::resource('skillDetails', App\Http\Controllers\SkillDetailController::class);

Route::resource('doneProjects', App\Http\Controllers\DoneProjectController::class);

Route::resource('blogs', App\Http\Controllers\BlogController::class);