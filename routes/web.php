<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;

Route::get('/diary', [DiaryController::class, 'index'])->name('diary.index');

Route::get('/diary/create', [DiaryController::class, 'create'])->name('diary.create');

Route::post('/diary', [DiaryController::class, 'save'])->name('diary.save');

Route::get('/diary/{id}', [DiaryController::class, 'detail'])->name('diary.detail');

Route::get('/diary/{id}/edit', [DiaryController::class, 'edit'])->name('diary.edit');

Route::patch('/diary/{id}', [DiaryController::class, 'update'])->name('diary.update');

Route::delete('/diary/{id}', [DiaryController::class, 'destroy'])->name('diary.destroy');