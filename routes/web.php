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
        Route::get('/add-author', App\Http\Livewire\Admin\Author\AddAuthor::class)->name('admin.author.add-author');
        Route::get('/edit-author/{author}', App\Http\Livewire\Admin\Author\EditAuthor::class)->name('admin.author.edit-author');
    });
     Route::prefix('category')->group(function () {
        Route::get('/', App\Http\Livewire\Admin\Category\Category::class)->name('admin.category');
        Route::get('/add-category', App\Http\Livewire\Admin\Category\AddCategory::class)->name('admin.category.add-category');
        Route::get('/edit-category/{category}', App\Http\Livewire\Admin\Category\EditCategory::class)->name('admin.category.edit-category');
    });
    Route::prefix('skill')->group(function () {
        Route::get('/', App\Http\Livewire\Admin\Skill\Skill::class)->name('admin.skill');
    //     Route::get('/add-category', App\Http\Livewire\Admin\Category\AddCategory::class)->name('admin.category.add-category');
    //     Route::get('/edit-category/{category}', App\Http\Livewire\Admin\Category\EditCategory::class)->name('admin.category.edit-category');
    });
    Route::prefix('experience')->group(function () {
        Route::get('/', App\Http\Livewire\Admin\Experience\Experience::class)->name('admin.experience');
        Route::get('/add-experience', App\Http\Livewire\Admin\Experience\AddExperience::class)->name('admin.experience.add-experience');
        Route::get('/edit-experience/{experience}', App\Http\Livewire\Admin\Experience\EditExperience::class)->name('admin.experience.edit-experience');
    });
    Route::prefix('project')->group(function () {
        Route::get('/', App\Http\Livewire\Admin\Project\Project::class)->name('admin.project');
        Route::get('/add-project', App\Http\Livewire\Admin\Project\AddProject::class)->name('admin.project.add-project');
        Route::get('/edit-project/{project}', App\Http\Livewire\Admin\Project\EditProject::class)->name('admin.project.edit-project');
    });

    Route::prefix('post')->group(function () {
        Route::get('/', App\Http\Livewire\Admin\Post\Post::class)->name('admin.post');
        Route::get('/add-post', App\Http\Livewire\Admin\Post\AddPost::class)->name('admin.post.add-post');
        Route::get('/edit-post/{post}', App\Http\Livewire\Admin\Post\EditPost::class)->name('admin.post.edit-post');
    });

    Route::get('/setting', App\Http\Livewire\Admin\Setting\Setting::class)->name('admin.setting');
});
