<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/building', [IndexController::class, 'building'])->name('building');
Route::get('/building/{id}', [IndexController::class, 'singlebuild'])->name('singlebuild');
Route::get('/construction', [IndexController::class, 'construction'])->name('construction');
Route::get('/consulting', [IndexController::class, 'consulting'])->name('consulting');
Route::get('/design', [IndexController::class, 'design'])->name('design');
Route::post('/', [IndexController::class, 'application'])->name('application');
Route::get('/design/{id}', [IndexController::class, 'singledesign'])->name('singledesign');
Route::get('/engineering', [IndexController::class, 'engineering'])->name('engineering');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
