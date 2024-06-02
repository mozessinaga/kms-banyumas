<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPesanController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeBannerController;
use App\Http\Controllers\HomeContactController;
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

Route::get('/', function () {
    $data = [
        'content' => 'home/home/index'
    ];
    //return view('home.index');
    return view('home.layouts.wrapper', $data);
});

Route::get('/joborder', [HomeBannerController::class, 'index']);
Route::get('/joborder/show/{id}', [HomeBannerController::class, 'show']);

Route::get('/alur', function () {
    $data = [
        'content' => 'home/alur/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/contact', [HomeContactController::class, 'index']);
Route::post('/contact/send', [HomeContactController::class, 'send']);


Route::get('/login', [AdminAuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/do', [AdminAuthController::class, 'doLogin'])->name('login.do');

// ======= ADMIN =======
Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('/logout', [AdminAuthController::class, 'logout']);

    Route::get('/dashboard', [AdminDashboardController::class, 'index']);

    Route::resource('/pesan', AdminPesanController::class);
    Route::resource('/bannerjob', AdminBannerController::class);
    Route::resource('/user', AdminUserController::class);
});