<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MemberController;
use App\Models\Post;
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
    return view('dashboard', ['title' => 'Dashboard']);
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'store'])->name('post.store');

Route::get('/story/{post:slug}', [PostController::class, 'index']);

Route::get('/author', [MemberController::class, 'index'])->name('member.index');
Route::get('/author/{user:username}', [MemberController::class, 'show'])->name('member.index');
