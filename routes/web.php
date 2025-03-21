<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
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

Route::view('/about', 'about');
Route::redirect('/sobre', 'about');

Route::resource('home', SiteController::class);
Route::get('/', [SiteController::class, 'index'])->name('user.index');

Route::get('/video/{slug}', [SiteController::class, 'details'])->name('video.details');

Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/admin/cadastro', [CadastroController::class, 'cadastro'])->name('admin.cadastro');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
