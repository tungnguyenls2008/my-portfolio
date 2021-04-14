<?php

use App\Http\Controllers\CryptController;
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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('about', [App\Http\Controllers\AboutFEController::class, 'index'])->name('about');
Route::get('blog', [App\Http\Controllers\BlogFEController::class, 'index'])->name('blog');
Route::get('contact', [App\Http\Controllers\ContactFEController::class, 'index'])->name('contact');
Route::get('services', [App\Http\Controllers\ServiceFEController::class, 'index'])->name('services');
Route::get('single', [App\Http\Controllers\SingleFEController::class, 'index'])->name('single');
Route::get('work', [App\Http\Controllers\WorkFEController::class, 'index'])->name('work');
Route::get('work-single', [App\Http\Controllers\WorkSingleFEController::class, 'index'])->name('work-single');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::resource('stories', App\Http\Controllers\StoryController::class);

Route::resource('goals', App\Http\Controllers\GoalController::class);

Route::resource('testimonies', App\Http\Controllers\TestimonyController::class);

Route::resource('skills', App\Http\Controllers\SkillController::class);

Route::resource('skillDetails', App\Http\Controllers\SkillDetailController::class);

Route::resource('doneProjects', App\Http\Controllers\DoneProjectController::class);

Route::resource('blogs', App\Http\Controllers\BlogController::class);



Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

Route::resource('aboutMeV2s', App\Http\Controllers\AboutMeV2Controller::class);

Route::resource('uploads', App\Http\Controllers\UploadController::class);

Route::resource('uploadDatatables', App\Http\Controllers\UploadDatatableController::class);

Route::get('crypt.index',[CryptController::class,'index'])->name('crypt_index');
Route::get('crypt.encrypt',[CryptController::class,'encryptView'])->name('encrypt_view');
Route::get('crypt.decrypt',[CryptController::class,'decryptView'])->name('decrypt_view');
Route::post('encrypt',[CryptController::class,'encrypt'])->name('encrypt');
Route::post('decrypt',[CryptController::class,'decrypt'])->name('decrypt');
