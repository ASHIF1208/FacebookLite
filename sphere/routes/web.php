<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\connectController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('show');
    })->name('dashboard');
});

Route::get('/add',[connectController::class,'index']);
Route::post('/submitpost',[connectController::class,'submitpost']);
Route::get('/show',[connectController::class,'show']);
Route::get('/update/{id}',[connectController::class,'update']);
Route::post('/updatedPost',[connectController::class,'updatedPost']);
Route::get('/delete/{id}',[connectController::class,'del']);
Route::post('/addcommand/{id}',[connectController::class,"comment"]);
Route::get('/findpost/{id}',[connectController::class,"findpost"]);