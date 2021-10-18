<?php

use App\Http\Livewire\Comment;
use App\Http\Livewire\Home;
use App\Http\Livewire\Image;
use App\Http\Livewire\Login;
use App\Http\Livewire\Logout;
use App\Http\Livewire\Pagination;
use App\Http\Livewire\Register;
use Illuminate\Support\Facades\Route;

Route::get('/comment',Comment::class);
Route::get('/pagination',Pagination::class);
Route::get('/image',Image::class);

Route::get('/home',Home::class)->name('home');
Route::get('/register',Register::class)->name('register');
Route::get('/login',Login::class)->name('login');
Route::get('/logout',Logout::class)->name('logout');