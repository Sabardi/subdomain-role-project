<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/owner', function () {
    return "owner";
})->middleware('role:owner');

Route::get('/tenant', function () {
    return "tenant";
})->middleware('role:tenant');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::domain('admin.yourdomain.com')->middleware('role:admin')->group(function () {
//     Route::get('/', function () {
//         // return view('admin.dashboard');
//         return 'ini admin' ;
//     });
// });

// Route::domain('owner.yourdomain.com')->middleware('role:owner')->group(function () {
//     Route::get('/owner', function () {
//         return view('owner.dashboard');
//     });
// });

// Route::domain('tenant.yourdomain.com')->middleware('role:tenant')->group(function () {
//     Route::get('/tenant', function () {
//         return view('tenant.dashboard');
//     });
// });