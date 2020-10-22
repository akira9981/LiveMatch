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

Route::get('/meeting/{id}', [MeetingController::class, 'show'])->middleware('auth');
Route::get('/meeting/{id}/edit', [MeetingController::class, 'edit'])->middleware('auth');
Route::post('/meeting/{id}/update', [MeetingController::class, 'update'])->middleware('auth');
Route::get('/meeting/{id}/delete', [MeetingController::class, 'delete'])->middleware('auth');
Route::post('/meeting/{id}/remove', [MeetingController::class, 'remove'])->middleware('auth');
Route::get('/meeting/{id}/entry', [EntryController::class, 'entry'])->middleware('auth');
Route::get('/meeting/{id}/cancel', [EntryController::class, 'cancel'])->middleware('auth');
Route::get('/create', [MeetingController::class, 'create'])->middleware('auth');
Route::post('/create', [MeetingController::class, 'store'])->middleware('auth');
Route::get('/message', [MessageController::class, 'index'])->middleware('auth');
Route::get('/message/{id}', [MessageController::class, 'form'])->middleware('auth');
Route::post('/message', [MessageController::class, 'store'])->middleware('auth');
Route::get('/my_meeting', [MeetingController::class, 'myMeeting'])->middleware('auth');
Route::get('/home', [MeetingController::class, 'index']);