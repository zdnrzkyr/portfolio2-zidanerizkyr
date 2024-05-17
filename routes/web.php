<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/menu', [LoginController::class, 'show'])->middleware('auth');

Route::get('/', function () {
    return view('index');
});
Route::match(['get','post'],'/',[ContactController::class,'store']);

Route::get('/login', function () {
     return view('login');
})->name('login');

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/buku-tamu', [ContactController::class,'index']);
Route::get('/buku-tamu/delete/{id}', [ContactController::class,'destroy']);

Route::match(['get','post'],'/update/{id}',[ContactController::class,'update']);


// Route::get('/update', function () {
//     return view('update');
// });

// Route::get('/buku-tamu', function () {
//     return view('bukutamu');
// })->name('bukutamu');
// Route::get('login', [ContactController::class, 'login'])->name('login');

