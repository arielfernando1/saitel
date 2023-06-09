<?php

use App\Http\Controllers\BillController;
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
    return view('main');
});

Route::get('/facturacion', function () {
    return view('home');
})->name('facturacion');

Route::get('/bills',[BillController::class, 'index'])->name('bills.index');
Route::get('/generate-pdf', [BillController::class, 'generateBlankPdf'])->name('generate-pdf');
// site in construction
Route::get('/working', function () {
    return view('working');
})->name('construction');
