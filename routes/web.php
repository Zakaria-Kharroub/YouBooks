<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// GET : Lecture
// POST : Création
// PUT : Mise à jour
// DELETE : Suppression


// Route::get('/', [\App\Http\Controllers\BookController::class, 'index']);
Route::resource('books', \App\Http\Controllers\BookController::class);

Route::resource('reservations',\App\Http\Controllers\ReservationController::class);

// Route::get('/login', function () {
//     return view('auth/login');
// });

// Route::get('/register', function () {
//     return view('auth/register');
// });


Route::post('/reservation', [\App\Http\Controllers\ReservationController::class,'reservation'])->name('reservation');
Route::get('/myReservation', [\App\Http\Controllers\ReservationController::class,'myReservation'])->name('myReservation')->middleware('IsAuth');
Route::delete('/retourner/{id}', [\App\Http\Controllers\ReservationController::class,'retourner'])->name('retourner');

// Route::resource('auth', \App\Http\Controllers\AuthController::class);



// routes authentfication
Route::post('/store', [\App\Http\Controllers\AuthController::class,'store'])->name('store');
Route::post('/loginUser',[\App\Http\Controllers\AuthController::class,'loginUser'])->name('loginUser');
Route::get('/logOut', [\App\Http\Controllers\AuthController::class,'logOut'])->name('logOut');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/register', [\App\Http\Controllers\AuthController::class,'register'])->name('register');



// dashboard
// Route::get('/dashboard', [\App\Http\Controllers\UserController::class,'index'])->name('dashboard');
// Route::resource('users', \App\Http\Controllers\UserController::class);
Route::get('/dashboard', [\App\Http\Controllers\DashController::class,'index'])->name('dashboard')->middleware('IsBiblotecaire', 'IsAuth');
Route::put('/updateRole/{id}', [\App\Http\Controllers\DashController::class,'updateRole'])->name('updateRole');






