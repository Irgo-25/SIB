<?php

use App\Models\Inventory;
use GuzzleHttp\Promise\Create;
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

Route::get('Dashboard', function () {
    return view('Beranda', [
        'title_web' => 'Dashboard'
    ]);
});
// Route::get('Inventory', function () {
//     return view('Inventory');
// });
// Route::get('Inventory/create', function () {
//     return view('Inventory.create');
// });

Route::get('/', [LoginController::class, 'login']);
Route::post('/', [LoginController::class, 'auth'])->name('login.auth');

Route::resource('inventory', InventoryController::class);
Route::resource('user', UserController::class);