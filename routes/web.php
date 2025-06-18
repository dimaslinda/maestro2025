<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeControllers;


Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', [HomeControllers::class, 'index'])->name('home');
Route::get('/director', [HomeControllers::class, 'director'])->name('director');
Route::get('/about', [HomeControllers::class, 'about'])->name('about');
Route::get('/heavy', [HomeControllers::class, 'heavy'])->name('heavy');
Route::get('/light', [HomeControllers::class, 'light'])->name('light');
Route::get('/maesgazine', [HomeControllers::class, 'maesgazine'])->name('maesgazine');
Route::get('/portofolio', [HomeControllers::class, 'portofolio'])->name('portofolio');
Route::get('/structural', [HomeControllers::class, 'structural'])->name('structural');
