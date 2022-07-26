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

Route::get('/education-form', [FormController::class, 'educationForm']);
Route::get('/work-form', [FormController::class, 'workForm']);
Route::get('/licence-form', [FormController::class, 'licenceForm']);
Route::get('/summary-form', [FormController::class, 'summaryForm']);
Route::get('/other-form', [FormController::class, 'otherForm']);
Route::post('/store', [FormController::class, 'store'])->name('form.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
