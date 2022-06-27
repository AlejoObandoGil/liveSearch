<?php

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
    return view('app');
});

Route::get('/post', function () {
    return response()->json([
        'posts' => Post::all(),
    ]);
});

Route::post('/post/search', function () {
    $posts = Post::where('title', 'like', '%' . request()->q . '%')
        ->orWhere('content', 'like', '%' . request()->q . '%')
        ->get();

    return response()->json([
        'posts' => $posts,
    ]);
});
