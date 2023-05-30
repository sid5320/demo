<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Models\player;



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


Route::get('/register', function () {
    return view('auth.registration');
});

// Route::get('/', function () {
// 	$player = Player::paginate(9);
//     return view('welcome')->with($player);
// });



// Route::post('datashow', [CustomAuthController::class, 'datashow'])->name('data');
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::post('store', [CustomAuthController::class, 'store'])->name('store');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
// Route::get('store', [CustomAuthController::class, 'Show'])->name('datatable');
