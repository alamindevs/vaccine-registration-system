<?php
Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth'])->name('dashboard');