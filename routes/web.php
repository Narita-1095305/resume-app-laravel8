<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/form', [FormController::class, 'form'])->middleware(['auth'])->name('form');;

// Route::get('/resume', [FormController::class, 'resume']);

Route::get('/pdf', [FormController::class, 'generate_pdf']);

// Route::get('/carousel', [FormController::class, 'carousel']);
Route::post('/store', [FormController::class, 'store'])->name('form.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
