<?php

use App\Http\Controllers\Dev\AuthController;
use App\Http\Controllers\Dev\PostController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// development
Route::get('dev/login', [AuthController::class, 'login'])->name('dev.login');
Route::post('dev/login', [AuthController::class, 'loginpost'])->name('dev.loginpost');
Route::get('dev/register', [AuthController::class, 'register'])->name('dev.register');

Route::get('dev/posts', [PostController::class, 'index'])->name('dev.post.index');
Route::get('dev/posts/create', [PostController::class, 'create'])->name('dev.post.create');
Route::post('dev/posts', [PostController::class, 'store'])->name('dev.post.store');
Route::delete('dev/posts/{id}', [PostController::class, 'destroy'])->name('dev.post.delete');
Route::get('dev/posts/{id}', [PostController::class, 'edit'])->name('dev.post.edit');
Route::put('dev/posts/{id}', [PostController::class, 'update'])->name('dev.post.update');
// 


require __DIR__.'/auth.php';
