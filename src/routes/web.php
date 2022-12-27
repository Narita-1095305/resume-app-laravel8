<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormController;
use App\Http\Controllers\ResumeController;
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

Route::Resource('resumes', ResumeController::class)->middleware(['auth']);

Route::get('/form', [FormController::class, 'form'])->middleware(['auth'])->name('form');

Route::post('/preview', [FormController::class, 'preview'])->name('form.preview');

Route::post('/store', [FormController::class, 'store'])->name('form.store');


require __DIR__.'/auth.php';
