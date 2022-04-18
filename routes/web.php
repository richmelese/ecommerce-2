<?php

use Illuminate\Support\Facades\Route;
use app /http/controllers\productcontroller;

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

Route::get('/product/register', [productcontroller,'rigister']); {
    return view('welcome');
});
Route::post('product.register',[productcontroller,'store']);

Auth::routes();

Route::get('/rigister', [App\Http\Controllers\HomeController::class, 'index'])->name('rigister');
