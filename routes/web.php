<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/home/edit',[App\Http\Controllers\User\EditController::class,"edit"]);
Route::post('/home/edit',[App\Http\Controllers\User\EditController::class,"return_check"])->name('edit');;
Route::get('/home/edit_check',[App\Http\Controllers\User\EditController::class,'edit']);
Route::post('/home/edit_check',[App\Http\Controllers\User\EditCheckController::class,'check'])->name('edit_check');;
Route::get('/home/edit_finish',[App\Http\Controllers\User\EditController::class,'edit']);
Route::post('/home/edit_finish',[App\Http\Controllers\User\EditFinishController::class,'finish']);
Route::get('/home/search',[App\Http\Controllers\User\SearchController::class,'search']);
Route::get('/home/result',[App\Http\Controllers\User\SearchController::class,'search']);
Route::post('/home/result',[App\Http\Controllers\User\ResultController::class,'result']);
Route::post('/home/search',[App\Http\Controllers\User\SearchController::class,'return_search']);
Route::post('/home/k',[App\Http\Controllers\KController::class,'k']);
Route::post('/home/k2',[App\Http\Controllers\KController::class,'k2']); //問いを追加するためにテスト用として作成

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fff', function () {
    return view('home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

