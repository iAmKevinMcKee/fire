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

Route::get('/faq', function() {
    return view ('faq');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/talks', [\App\Http\Controllers\TalkController::class, 'index'])
        ->name('talks.index');
    Route::get('/talks/{talk}', [\App\Http\Controllers\TalkController::class, 'show'])
        ->name('talks.show');
    Route::post('/talks', [\App\Http\Controllers\TalkController::class, 'store'])
        ->name('talks.store');

    Route::post('/talk-comment/{talk}', [\App\Http\Controllers\TalkCommentController::class, 'store'])
        ->name('talk_comment.store');

    Route::get('/fire-tweets', function() {
        return view('fire-tweets');
    })->name('tweets.index');
});

require __DIR__.'/auth.php';
