<?php

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

use App\User;

Route::get('/', function () {
    $users = User::get();
    return view('welcome', compact('users'));
});

Route::get('/profile/{id}', function ($id) {
    
    $user = User::find($id);
    
    $posts = $user->posts()
                ->with('category', 'image', 'tags')
                ->withCount('comments')
                ->get(); 

    $videos = $user->videos()
                ->with('category', 'image', 'tags')
                ->withCount('comments')
                ->get();


    return view('profile', compact('user', 'posts', 'videos'));

})->name('profile');
