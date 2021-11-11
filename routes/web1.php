<?php

use App\Http\Controllers\frontController;
use App\Http\Livewire\Actu;
use App\Http\Livewire\Apropos;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Rtl;

use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;
use App\Http\Livewire\MaisonVirtuelle;
use App\Http\Livewire\SendMail;
use App\Http\Livewire\Terain;
use Illuminate\Http\Request;

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

Route::get('/', Login::class)->name('login');

Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');
 
Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');
Route::get('/mail',SendMail::class)->name('Mail');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/projet', Billing::class)->name('projet');
    Route::get('/terrain', Terain::class)->name('terrain');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/service', Tables::class)->name('services');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/Actualite-Admin', Actu::class)->name('actualite');
    Route::get('/a-propos-admin', Apropos::class)->name('apropos');
    Route::get('/maison-admin', MaisonVirtuelle::class)->name('maison_v');
    Route::get('/rtl', Rtl::class)->name('rtl');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
});

