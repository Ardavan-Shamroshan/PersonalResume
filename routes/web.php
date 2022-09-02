<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\User\User;
use App\Http\Livewire\Admin\User\AddUser;
use App\Http\Livewire\Admin\User\EditUser;
use App\Http\Livewire\Admin\AdminDashboard;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::prefix('admin')->group(function () {
    Route::get('/', AdminDashboard::class)->name('admin.dashboard');
    Route::prefix('user')->group(function () {
        Route::get('/', User::class)->name('admin.user');
        Route::get('/add-user', AddUser::class)->name('admin.user.add-user');
        Route::get('/edit-user/{user}', EditUser::class)->name('admin.user.edit-user');
    });
});
