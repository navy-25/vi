<?php

use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\WebsiteController;
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
    return route('index');
});

Route::controller(WebsiteController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::controller(DirectoryController::class)->prefix('directory')->name('directory.')->group(function () {
    Route::get('/', 'index')->name('index');
});
