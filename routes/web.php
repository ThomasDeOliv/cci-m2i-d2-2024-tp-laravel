<?php

use App\Http\Controllers\Partner\PartnerController;
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

Route::get('/', [PartnerController::class, 'index'])->name('partner.index');
Route::get('/partner', [PartnerController::class, 'index'])->name('partner.main');
Route::get('/about', [PartnerController::class, 'about'])->name('partner.about');
Route::get('/contact', [PartnerController::class, 'contact'])->name('partner.contact');
Route::get('/show/{id}', [PartnerController::class, 'show'])->whereNumber('id')->name('partner.show');
Route::get('/store', [PartnerController::class, 'create'])->name('partner.create');
Route::post('/store', [PartnerController::class, 'store'])->name('partner.store');
Route::get('/partner-destroy', [PartnerController::class, 'destroy'])->name('partner.destroy');