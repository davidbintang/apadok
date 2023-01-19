<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\LandingController;

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

Route::get('/', [LandingController::class, 'index'])->name('index');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/login-admin', [UserController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('/login-attempt', [UserController::class, 'loginAttempt'])->name('login-attempt');
Route::post('/login-attempt-admin', [UserController::class, 'loginAttemptAdmin'])->name('login-attempt-admin');
Route::get('/article', [LandingController::class, 'article'])->name('article');
Route::get('/article-detail', [LandingController::class, 'articleDetail'])->name('article-detail');
Route::get('/about-us', [LandingController::class, 'about'])->name('about');

Route::prefix('institution')->name('institution.')->group(function () {
    Route::get('/', [InstitutionController::class, 'index'])->name('index');
    Route::get('/peserta', [InstitutionController::class, 'peserta'])->name('peserta');
    Route::get('/peserta/1', [InstitutionController::class, 'detail'])->name('detail');
    Route::get('/screening', [InstitutionController::class, 'screening'])->name('screening');
    Route::get('/chat', [InstitutionController::class, 'chat'])->name('chat');
    Route::get('/disease', [InstitutionController::class, 'disease'])->name('disease');
    Route::get('/stroke', [InstitutionController::class, 'stroke'])->name('stroke');
    Route::get('/kardiovaskular', [InstitutionController::class, 'kardiovaskular'])->name('kardiovaskular');
    Route::get('/diabetes', [InstitutionController::class, 'diabetes'])->name('diabetes');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/institution-list', [AdminController::class, 'institutionList'])->name('institutionList');
    Route::get('/article', [AdminController::class, 'article'])->name('article');
    Route::get('/add-article', [AdminController::class, 'addArticle'])->name('addArticle');
    Route::get('/edit-article', [AdminController::class, 'editArticle'])->name('editArticle');
});