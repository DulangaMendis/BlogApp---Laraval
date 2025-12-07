<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainPanelController;

Route::get('/',[HomeController::class,'homepage']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.admin');   // <— THIS VIEW
    })->name('admin.dashboard');
});

Route::get('/panel',function(){
    return view('mainpanel.panel');
});

Route::get('/post_page',[MainPanelController::class,'post_page']);

Route::post('/add_post',[MainPanelController::class,'add_post']);

Route::get('/show_post',[MainPanelController::class,'show_post']);

Route::get('/delete_post/{id}',[MainPanelController::class,'delete_post']);


