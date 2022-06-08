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

Route::get('/', [AuthController::class, 'Index'])->name('/');
// Route::get('/', [AuthController::class, 'mainVIew'])->name('/');
Route::get('/register', [AuthController::class, 'registerView'])->name('register');
Route::post('/save/register', [AuthController::class, 'saveRegisterUser'])->name('save-register-user');
Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::get('/ajax-district', [AuthController::class, 'getDistrict'])->name('ajax-district');
