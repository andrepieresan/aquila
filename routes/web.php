<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::middleware(['authh'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('Dashboard', [
            "name" => "andre"
        ]);
    })->name('dashboard');
    Route::get('manager', function () {
        return Inertia::render('Estrategia');
    })->name('manager');
    Route::get('performance', function () {
        return Inertia::render('Performance');
    })->name('performance');
    Route::get('backtest', function () {
        return Inertia::render('Backtest');
    })->name('backtest');
    Route::get('settings', function () {
        return Inertia::render('Settings');
    })->name('settings');
})->prefix('/');

Route::get('login', function () {
    return Inertia::render('Login');
})->name('login');
// require __DIR__.'/auth.php';
