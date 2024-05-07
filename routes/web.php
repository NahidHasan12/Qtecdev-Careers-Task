<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [NoteController::class, 'index'])->name('home');
Route::get('/logout', [NoteController::class, 'logout'])->name('logout');

Route::get('/create', [NoteController::class, 'create'])->name('create');
Route::post('/store', [NoteController::class, 'store'])->name('store');

Route::get('/edit/{id}', [NoteController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [NoteController::class, 'update'])->name('update');

Route::get('/note_list', [NoteController::class, 'notes'])->name('note_list');
Route::get('/delete/{id}', [NoteController::class, 'delete'])->name('delete');
