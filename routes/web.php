<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PageController::class, 'showEnglish'])->name('home');

Route::get('/es', function () {
    return view('welcome');
})->name('spanish');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('locale/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');
Route::get('/jufman', [App\Http\Controllers\PageController::class, 'showEnglish'])->name('jufman');
require __DIR__.'/auth.php';
