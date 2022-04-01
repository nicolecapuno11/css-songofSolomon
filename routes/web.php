<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongofSolomonController;

Route::get('/', [SongofSolomonController::class, 'index']);
Route::get('/chapter/{chapter_num}', [SongofSolomonController::class, 'readByChapter']);
Route::get('/read-all-chapters', [SongofSolomonController::class, 'allChapters']);