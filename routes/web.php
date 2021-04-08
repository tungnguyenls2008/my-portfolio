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




Route::resource('stories', App\Http\Controllers\StoryController::class);

Route::resource('goals', App\Http\Controllers\GoalController::class);

Route::resource('testimonies', App\Http\Controllers\TestimonyController::class);

Route::resource('skills', App\Http\Controllers\SkillController::class);

Route::resource('skillDetails', App\Http\Controllers\SkillDetailController::class);

Route::resource('doneProjects', App\Http\Controllers\DoneProjectController::class);

Route::resource('blogs', App\Http\Controllers\BlogController::class);

Route::resource('aboutMes', App\Http\Controllers\AboutMeController::class);

Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');