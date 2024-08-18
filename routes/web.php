<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Register\Register;
use App\Livewire\Register\RegisterCompany;
use App\Livewire\Register\RegisterUser;
use App\Livewire\Login;
use App\Livewire\Dashboard\DashboardCompany;

Route::get('/', Home::class)->name('home');

Route::get('/register', Register::class)->name('register');

Route::get('/register/company', RegisterCompany::class)->name('register.company');

Route::get('/register/user', RegisterUser::class)->name('register.user');

Route::get('/login', Login::class)->name('login');

Route::get('/dashboard-company', DashboardCompany::class)->name('dashboard.company');
