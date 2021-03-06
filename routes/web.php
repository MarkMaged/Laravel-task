<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
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

// Route::get('/home', function () {
//     return view('home');
// })->name('home');

Route::get('/home', [HomeController::class , 'home'])->name('home');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

Route :: get('/contact' , [HomeController::class, 'contact'])->name('contact');

// Route::get('/blogs', function () {
//     return view('blogs');
// })->name('blogs');
Route::get('/blogs', [BlogController::class , 'blogs'])->name('blogs');

// Route::get('/singel-blog', function () {
//     return view('singel-blog');
// })->name('singel-blog');
Route::get('/blog/{id}' , [BlogController::class , 'singel_blog'])->name('singel-blog');
