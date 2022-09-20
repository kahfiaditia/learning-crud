<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdulevelController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\ProgramController;
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
    return view('welcome',[
        "title" => "Home"
    ]);
});

Route::get('home', function () {
    return view('home');
});

Route::get('edulevels', [EdulevelController::class, 'data']);
Route::get('edulevels/add', [EdulevelController::class, 'add']);
Route::post('edulevels', [EdulevelController::class, 'addProcess']);
Route::get('edulevels/edit/{id}', [EdulevelController::class, 'edit']);
Route::patch('edulevels/{id}',[EdulevelController::class,'OnProses']);
Route::delete('edulevels/{id}',[EdulevelController::class,'delete']);

Route::get('pelajaran',[PelajaranController::class, 'pelajaran']);
Route::get('pelajaran/input',[PelajaranController::class, 'input']);
Route::post('pelajaran',[PelajaranController::class, 'proses']);
Route::get('pelajaran/edit/{id}', [PelajaranController::class, 'edit']);
Route::patch('pelajaran/{id}', [PelajaranController::class, 'ProsesEdit']);
Route::delete('pelajaran/{id}', [PelajaranController::class, 'hapus']);

Route::resource('programs', ProgramController::class);