<?php

use App\Http\Controllers\AdminUserController;
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


Route::get('/joborder', function () {
    $data = [
        'content' => 'home/joborder/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/alur', function () {
    $data = [
        'content' => 'home/alur/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/contact', function () {
    $data = [
        'content' => 'home/contact/index'
    ];
    //return view('home.index');
    return view('home.layouts.wrapper', $data);
});


Route::get('/login', function () {
    $data = [
        'content' => 'home/auth/login'
    ];
    //return view('home.index');
    return view('home.layouts.wrapper', $data);
});

// ======= ADMIN =======
Route::prefix('/admin')->group(function(){
    Route::get('/dashboard', function () {
        $data = [
            'content'   => 'admin/dashboard/index'
        ];

        return view('admin.layouts.wrapper', $data);
    });

    Route::resource('/user', AdminUserController::class);
});