<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenitsController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tenis', [TenisController::class, 'index'])->name('tenits');
Route::prefix('/tenis')->group(function(){
    Route::get('/',[TenitsController::class, 'index'])->name('tenits.index');
    Route::get('/view/{id}',[TenitsController::class, 'view'])->name('tenits.view');
    Route::get('/update/{id}',[TenitsController::class, 'update'])->name('tenits.update');
    Route::get('/delete/{id}',[TenitsController::class, 'delete'])->name('tenits.delete');
    Route::get('/terminate/{id}',[TenitsController::class, 'terminate'])->name('tenits.terminate');
    Route::get('/create/',[TenitsController::class, 'create'])->name('tenits.create');
    Route::post('/create/',[TenitsController::class, 'store'])->name('tenits.store');
});


