<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\AuthController;

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

//ブログ一覧画面を表示
Route::get('/cafe', [CafeController::class, 'homeShow'])->name('home');

//ログイン画面を表示
Route::get('/login', [AuthController::class, 'loginFormShow'])->name('login');


//ログイン処理
Route::post('/login', [AuthController::class, 'login'])->name('auth');
