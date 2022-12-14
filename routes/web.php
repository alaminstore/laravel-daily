<?php

use App\Http\Controllers\PaginationController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pagination', [PaginationController::class, 'index']);
Route::get('/pagination/fetch_data', [PaginationController::class, 'fetch_data']);
// tab filtering for small size of data
Route::get('/tab-filter', [PaginationController::class, 'tab_filter']);
