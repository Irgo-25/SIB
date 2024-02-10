<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InventoryController;

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
// Route Login
Route::middleware('guest')->get('/', [LoginController::class, 'login'])->name('login');
// Route untuk Autentikasi saat login
Route::post('/', [LoginController::class, 'auth'])->name('login.auth');
// Route Untuk Logout
Route::middleware('Admin')->post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('Dashboard', function () {
    return view('Beranda', [
        'title_web' => 'Dashboard'
    ]);
});
// Route ke controller inventory
Route::middleware('Admin')->resource('inventory', InventoryController::class);
// Route ke controller user management
Route::middleware('Admin')->resource('user', UserController::class);