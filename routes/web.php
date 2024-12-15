<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Ini adalah file rute untuk aplikasi Anda. Anda dapat menambahkan
| rute di sini dan menyesuaikan middleware atau kontroler sesuai kebutuhan.
|
*/

// Rute default: Redirect ke halaman login
Route::get('/', function () {
    return redirect('/login'); // Arahkan langsung ke halaman login
});

// Authentication routes (tanpa fitur register)
Auth::routes(['register' => false]);

// Rute yang membutuhkan autentikasi
Route::middleware('auth')->group(function () {

    // Halaman Home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Halaman Profile
    Route::get('/profile', [ProfileController::class, '__invoke'])->name('profile');

    // Rute CRUD untuk karyawan (EmployeeController)
    Route::resource('employees', EmployeeController::class);

});