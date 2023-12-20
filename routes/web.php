<?php

// routes/web.app

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\CommentController;

// TOPページの全表示のルート
Route::get('/', [ThreadController::class, 'index']);

// Thread関連のルート
Route::resource('threads', ThreadController::class)->only(['index', 'store', 'show']);

// Comment関連のルート
Route::post('/threads/{threadId}/comments', [CommentController::class, 'store'])->name('comments.store');

// Search関連のルート
Route::get('/searchs/search', [ThreadController::class, 'search'])->name('searchs.search');