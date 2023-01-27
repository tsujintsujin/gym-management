<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
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


Route::get('/', [MemberController::class, 'welcome'])->name('welcome');
Route::post('/create', [MemberController::class,'store'])->name('create');
Route::get('/delete/{id}', [MemberController::class,'delete'])->name('delete');
Route::get('/edit/{id}', [MemberController::class,'edit'])->name('edit');