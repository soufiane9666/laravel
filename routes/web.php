<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/contact', function() {
//     return view('contact');
// });
// Route::get('/page1', function() {
//     return view('page1');
// });

Route::get('/', [NavController::class, 'index']);
Route::get('page1', [NavController::class,'page1']);
Route::get('contact', [NavController::class, 'contact']);