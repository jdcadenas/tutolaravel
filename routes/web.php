<?php

use App\Models\Post;
use App\Models\User;
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
    $users = User::get();

    return view('welcome', ['users' => $users]);
});

Route::get('/profile/{id}', function ($id) {

    $user = User::with([
        'profile', 'image', 'location', 'level', 'groups',
        'posts' => function ($query) {
            $query->with(['category', 'tags', 'image'])->withCount('comments');
        },
        'videos' => function ($query) {
            $query->with(['category', 'tags', 'image'])->withCount('comments');
        }
    ])->where('id', $id)->first();


  
    return view('profile', [
        'user' => $user,
        

    ]);
})->name('profile');

Route::get('/dashboard', function () {
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
