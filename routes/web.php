<?php
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/register/seeker',[UserController::class,'createSeeker'])->name('create.seeker');
Route::post('/register/seeker',[UserController::class,'storeSeeker'])->name('store.seeker');

Route::get('/login',[UserController::class,'login'])->name('login');