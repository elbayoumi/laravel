<?php

// all namespace namespaces
use App\Http\Controllers\commentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// auth and routing

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [PostController::class, 'index'])->name('posts');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{postId}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::delete('/posts/{postId}',[PostController::class,'destroy'])->name("posts.destroy");
Route::get('/posts\restore' , [PostController::class, 'restore'])->name('posts.restore');
Route::get('/posts/{postId}/edit', [PostController::class, "edit"])->name('posts.edit');
Route::put('/posts/{postId}' , [PostController::class, 'update'])->name('post.update');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


});


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
