<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\WebsiteController;

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

Route::get('/', [WebsiteController::class,'index'])->name('index');
Route::get('/result/{id}',[WebsiteController::class,'result'])->name('index.result');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/result/show/{id}',[WebsiteController::class,'show'])->name('result.show');
Route::middleware(['auth'])->prefix('admin')->group(function(){
    Route::get('result',[SubjectController::class,'index'])->name('admin.result');
    Route::get('result/create',[SubjectController::class,'create'])->name('result.create');
    Route::post('result/store',[SubjectController::class,'import'])->name('result.store');
    Route::get('result/export',[SubjectController::class,'export'])->name('export-result');
    Route::get('result/template',[SubjectController::class,'downloadResultTemplate'])->name('result.template');
    Route::get('result/delete/{id}',[SubjectController::class,'delete'])->name('result.delete');
});
Auth::routes();
