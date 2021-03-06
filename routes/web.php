<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\SearchController;
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

Route::get('/', [GuestController::class, 'index']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/search', [SearchController::class, 'index']);
    Route::get('/meeting/{id}', [MeetingController::class, 'show']);
    Route::get('/meeting/{id}/edit', [MeetingController::class, 'edit']);
    Route::post('/meeting/{id}/update', [MeetingController::class, 'update']);
    Route::get('/meeting/{id}/delete', [MeetingController::class, 'delete']);
    Route::post('/meeting/{id}/remove', [MeetingController::class, 'remove']);
    Route::get('/meeting/{id}/entry', [EntryController::class, 'entry']);
    Route::get('/meeting/{id}/cancel', [EntryController::class, 'cancel']);
    Route::get('/create', [MeetingController::class, 'create']);
    Route::post('/create', [MeetingController::class, 'store']);
    Route::get('/message', [MessageController::class, 'index']);
    Route::get('/message/{id}', [MessageController::class, 'form']);
    Route::post('/message', [MessageController::class, 'store']);
    Route::get('/my_meeting', [MeetingController::class, 'myMeeting']);
    Route::get('/home', [MeetingController::class, 'index']);
});