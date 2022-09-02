<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::prefix('admin')->group(function () {
    Route::get('/', App\Http\Livewire\Admin\AdminDashboard::class)->name('admin.dashboard');
    Route::prefix('user')->group(function () {
        Route::get('/', App\Http\Livewire\Admin\User\User::class)->name('admin.user');
        Route::get('/add-user', App\Http\Livewire\Admin\User\AddUser::class)->name('admin.user.add-user');
        Route::get('/edit-user/{user}', App\Http\Livewire\Admin\User\EditUser::class)->name('admin.user.edit-user');
    });
    Route::prefix('author')->group(function () {
        Route::get('/', App\Http\Livewire\Admin\Author\Author::class)->name('admin.author');
    });
});
