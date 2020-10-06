<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\EntryController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/meeting/{id}', [MeetingController::class, 'show']);
Route::get('/create', [MeetingController::class, 'create']);
Route::post('/create', [MeetingController::class, 'store']);
Route::get('/meeting/{id}/entry', [EntryController::class, 'entry']);
Route::get('/meeting/{id}/cancel', [EntryController::class, 'cancel']);
Route::get('/message', [MessageController::class, 'index']);
Route::get('/home', [MeetingController::class, 'index']);