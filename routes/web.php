<?php

use App\Http\Controllers\DashboardController;
use App\Livewire\Admin\Category\ListCategory;
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
    return view('welcome');
});
Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/admin/category', ListCategory::class)->name('category');
