<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\admins_data_controller;
use App\Http\Controllers\investors_controller;
use App\Http\Controllers\founders_data_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('index');

Route::get('about',[admin_controller::class, 'about']);
Route::get('portfolio',[admin_controller::class, 'portfolio']);
Route::get('approach',[admin_controller::class, 'approach']);
Route::get('news',[admin_controller::class, 'news']);
Route::get('contact',[admin_controller::class, 'contact']);

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [founders_data_controller::class, 'index'])->name('dashboard');
    Route::get('dashboard/{id}/seeData', [founders_data_controller::class, 'view_all']);
    Route::get('dashboard/{id}/delete', [founders_data_controller::class, 'destroy']);
    Route::post('dashboard/insert', [founders_data_controller::class, 'insert']);

    Route::get('founders/{id}/edit', [founders_data_controller::class, 'edit']);
    Route::put('update/{id}/founders_data', [founders_data_controller::class, 'update_founders_data']);
    Route::put('update/{id}/business_plan', [founders_data_controller::class, 'update_business_plan']);
    Route::put('update/{id}/business_model', [founders_data_controller::class, 'update_business_model']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/data/{id}/manage/', [ProfileController::class, 'data_manage'])->name('views.data_manage');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    // Route::get('admin_dashboard',[admin_controller::class, 'admin']);



    Route::get('investors_dashboard', [investors_controller::class, 'investors']);
    Route::post('investors/insert', [investors_controller::class, 'insert_data']);
    Route::get('investors_dashboard/{id}/delete', [investors_controller::class, 'destroy_investors']);
    Route::get('investors/{id}/edit', [investors_controller::class, 'edit_investors']);
    Route::put('investors/{id}/update_image', [investors_controller::class, 'update_investors_image']);
    Route::put('investors/{id}/update_data', [investors_controller::class, 'update_investors_data']);

});

// Route::middleware('auth')->group(function () {

//     Route::get('dashboard', [admins_data_controller::class, 'index'])->name('dashboard');
//     Route::get('dashboard/{id}/seeData', [admins_data_controller::class, 'view_all']);
//     Route::get('dashboard/{id}/delete', [admins_data_controller::class, 'destroy']);
//     Route::post('dashboard/insert', [admins_data_controller::class, 'insert']);
// });
require __DIR__.'/auth.php';

require __DIR__.'/admin-auth.php';
