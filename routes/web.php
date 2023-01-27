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

// Route::get('/editmember/{id}', function($id){
//     $members = members::find($id);
//     return view('editpage')->with();
// });

Route::get('/', [MemberController::class, 'welcome'])->name('welcome');
Route::post('/createmember', [MemberController::class,'store'])->name('createmember');
Route::post('/createtrainer', [MemberController::class,'storeTrainer'])->name('createtrainer');
Route::post('/createsubscription', [MemberController::class,'createsubscription'])->name('createsubscription');


Route::get('/delete/{id}', [MemberController::class,'delete'])->name('delete');
Route::get('/editpage/{id}', [MemberController::class,'editpage'])->name('editpage');
Route::post('/editmember/{id}', [MemberController::class,'editmember'])->name('editmember');
