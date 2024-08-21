<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Register\Register;
use App\Livewire\Register\RegisterCompany;
use App\Livewire\Register\RegisterUser;
use App\Livewire\Login;
use App\Livewire\Dashboard\DashboardCompany;
use App\Livewire\Dashboard\DashboardUser;
use App\Livewire\Offers\CreateOffer;
use App\Livewire\Offers\ShowCompanyOffers;

Route::get('/', Home::class)->name('home');

Route::get('/register', Register::class)->name('register');

Route::get('/register/company', RegisterCompany::class)->name('register.company');

Route::get('/register/user', RegisterUser::class)->name('register.user');

Route::get('/login', Login::class)->name('login');

Route::get('/company/{id}/dashboard', DashboardCompany::class)->name('dashboard.company');

Route::get('/user/{id}/dashboard', DashboardUser::class)->name('dashboard.user');

Route::get('/company/{id}/offers/create', CreateOffer::class)->name('offers.create');

Route::get('/company/{id}/offers', ShowCompanyOffers::class)->name('offers.show-company-offers');
