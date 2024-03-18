<?php

use App\Http\Controllers\CommandeController;
use App\Models\Commande;
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
    $data = Commande::paginate(10);
    return view('index',['data'=> $data]);
});


Route::get('/form',[CommandeController::class ,'index'])->name('create_commande');
Route::get('/edit-commande/{id}',[CommandeController::class ,'edit'])->name('edit');
Route::get('/show-commande-details/{id}',[CommandeController::class ,'show'])->name('show');
Route::post('/update-commande/{id}',[CommandeController::class ,'update'])->name('update');

Route::get('/delete-commande/{id}',[CommandeController::class ,'destroy'])->name('delete');

Route::post('/creating',[CommandeController::class ,'store'])->name('creating');
