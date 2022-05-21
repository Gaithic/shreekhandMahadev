<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'mainView'])->name('/');
Route::get('/user-register', [AuthController::class, 'registerView'])->name('user-register');
Route::post('/save-register-user', [AuthController::class, 'saveRegisterUser'])->name('save-users');
Route::get('/login/page', [AuthController::class, 'loginView'])->name('login-page');
Route::get('/get-circle', [AuthController::class, 'getCircles'])->name('get-circle');