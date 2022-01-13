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
});


use App\Http\Controllers\PostController;

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

Route::get('importExportView', [PostController::class, 'importExportView']);
Route::get('export', [PostController::class, 'export'])->name('export');
Route::post('import', [PostController::class, 'import'])->name('import');

Route::get('/users/import', 'App\Http\Controllers\UserImportController@show');
Route::post('/users/import', 'App\Http\Controllers\UserImportController@store');
