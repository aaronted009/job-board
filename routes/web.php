<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Register\Register;

Route::get('/', Home::class)->name('home');

Route::get('/register', Register::class)->name('register');
