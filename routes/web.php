<?php

use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [VideoController::class, 'index']);
Route::get('/home/{id}', [VideoController::class, 'home'])->name('home');

Route::get('view', [VideoController::class, 'upload_view'])->name('view');
Route::post('getdata', [VideoController::class, 'getVideoByid'])->name('getVideoByid');
Route::post('store', [VideoController::class, 'store'])->name('store');
Route::post('upload', [VideoController::class, 'uploadLargeFiles'])->name('files.upload.large');
