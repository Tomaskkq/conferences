
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [ConferenceController::class, 'index'])->name('conferences.index');

Route::get('/conferences', [ConferenceController::class, 'index'])->name('conferences.index');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');

    Route::post('/conferences', [ConferenceController::class, 'store'])->name('conferences.store');

    Route::get('/conferences/{conference}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit');

    Route::put('/conferences/{conference}', [ConferenceController::class, 'update'])->name('conferences.update');

    Route::delete('/conferences/{conference}', [ConferenceController::class, 'destroy'])->name('conferences.destroy');
});

Route::get('/conferences/{conference}', [ConferenceController::class, 'show'])->name('conferences.show');
