<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DamageController;
use App\Http\Controllers\SymptomController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [GuestController::class, 'home'])->name('guest.index');
Route::get('/diagnoses', [GuestController::class, 'diagnoses'])->name('guest.diagnoses');
Route::get('/history', [GuestController::class, 'history'])->name('guest.history');
Route::post('/diagnoses/proses', [GuestController::class, 'processDiagnoses'])->name('guest.diagnoses.store');
// Route::get('/diagnoses/result', [GuestController::class, 'diagnosesResult'])->name('guest.diagnoses.result');
// Route::get('/diagnoses/result/nothing', [GuestController::class, 'diagnosesNothing'])->name('guest.diagnoses.result.nothing');
Route::get('/sparepart', [GuestController::class, 'sparepart'])->name('guest.sparepart');
Route::get('/sparepart/{sparepart}', [GuestController::class, 'sparepartdetail'])->name('guest.sparepart.detail');
Route::get('/article', [GuestController::class, 'article'])->name('guest.article');
Route::get('/article/{article}', [GuestController::class, 'articledetail'])->name('guest.article.detail');


Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.admin')->middleware('guest');
Route::get('/signout', [AuthController::class, 'signOut'])->name('signout'); 

Route::middleware(['auth', 'Admin'])->group(function () {
    Route::get('admin/index', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('admin/damage', DamageController::class);
    Route::resource('admin/symptom', SymptomController::class);
    Route::resource('admin/rule', RuleController::class);
    Route::resource('admin/sparepart', SparepartController::class);
    Route::resource('admin/article', ArticleController::class);
});
