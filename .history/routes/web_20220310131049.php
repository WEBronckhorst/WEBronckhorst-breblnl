<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\TicketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contachmod -R 775 storageins the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/file-upload', [FAQController::class, 'store'])->middleware(['auth'])->name('file-upload');
Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/faq', [FAQController::class, 'index'])->middleware(['auth'])->name('faq.index');
Route::get('/dashboard/faq/create', [FAQController::class, 'create'])->middleware(['auth'])->name('faq.create');
Route::get('/dashboard/faq/{id}', [FAQController::class, 'show'])->middleware(['auth'])->name('faq.show');
Route::get('/dashboard/faq/{id}/edit', [FAQController::class, 'edit'])->middleware(['auth'])->name('faq.edit');
Route::post('/upload',  [FAQController::class, 'upload']);
Route::post('dashboard/faq/{id}/update',  [FAQController::class, 'update'])->name('faq.update');
require __DIR__.'/auth.php';

Route::post('uploads', [FAQController::class, 'uploadImage'])->name('posts.upload');


Route::prefix('ticket')->controller(TicketController::class)->group(function () {
    Route::get('/{id}', 'show');
   // Route::post('/orders', 'store');
});
