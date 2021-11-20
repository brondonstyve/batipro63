<?php

use App\Http\Controllers\frontEndController;
use App\Http\Livewire\Actu;
use App\Http\Livewire\Apropos;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Etape;
use App\Http\Livewire\HomeConfig;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\Rtl;

use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;
use App\Http\Livewire\LogementCollectif as LivewireLogementCollectif;
use App\Http\Livewire\MaisonContemporaine as LivewireMaisonContemporaine;
use App\Http\Livewire\MaisonVirtuelle;
use App\Http\Livewire\MoconnerieGenerale as LivewireMoconnerieGenerale;
use App\Http\Livewire\SendMail;
use App\Http\Livewire\Temoignage;
use App\Http\Livewire\Terain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Ernest - Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::name("aboutus")->get('/a-propos-de-batipro', 'App\Http\Controllers\frontEndController@aboutUs');
Route::name("projet-front")->get('/nos-projets', 'App\Http\Controllers\frontEndController@projets');
Route::name("terrain-front")->get('/nos-terrains', 'App\Http\Controllers\frontEndController@terrain');
Route::name("detailTerrain")->get('/deatil-terrains/{id}', 'App\Http\Controllers\frontEndController@detailTerrain');
Route::name("maisonVirtuelle")->get('/nos-maisons-virtuelles', 'App\Http\Controllers\frontEndController@maisonVirtuelle');
Route::name("detailmaisonVirtuelle")->get('/detail-maisons-virtuelles/{id}', 'App\Http\Controllers\frontEndController@detailmaisonVirtuelle');
Route::name("detailProjet")->get('/detail-projets/{id}', 'App\Http\Controllers\frontEndController@detailProjet');
Route::name("actualite-front")->get('/actualite-batipro', 'App\Http\Controllers\frontEndController@blog');
Route::name("detailActualite")->get('/detail-actualite-batipro/{id}', 'App\Http\Controllers\frontEndController@detailActualite');
Route::name("brochure")->get('/brochure-batipro', 'App\Http\Controllers\frontEndController@brochure');
Route::name("service-front")->get('/services-batipro', 'App\Http\Controllers\frontEndController@service');
Route::name("mc")->get('/maison-contemparaine', 'App\Http\Controllers\frontEndController@mc');
Route::name("detailMc")->get('/actualite-maison-contemparaine/{id}', 'App\Http\Controllers\frontEndController@detailMc');
Route::name("lc")->get('/logement-collectif', 'App\Http\Controllers\frontEndController@lc');
Route::name("detailLc")->get('/actualite-logement-collectif/{id}', 'App\Http\Controllers\frontEndController@detailLc');
Route::name("mg")->get('/maçonnerie-generale', 'App\Http\Controllers\frontEndController@mg');
Route::name("detailMg")->get('/actualite-maconnerie-generale/{id}', 'App\Http\Controllers\frontEndController@detailMg');
Route::name("mo")->get('/maitrise-d-œuvre', 'App\Http\Controllers\frontEndController@mo');
Route::name("contact")->get('/contact', 'App\Http\Controllers\frontEndController@contact');
Route::name("etape")->get('/etape', 'App\Http\Controllers\frontEndController@etape');
Route::get('/mail',SendMail::class)->name('Mail');
Route::name("down")->get('/download', 'App\Http\Controllers\frontEndController@download');
Route::name("politique")->get('/Politique-de-confidentialité', 'App\Http\Controllers\frontEndController@politique');
Route::name("mention")->get('/Mentions-légales', 'App\Http\Controllers\frontEndController@mention');
Route::name("temoignage")->get('/Vidéos', 'App\Http\Controllers\frontEndController@temoignage');


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


/* Route::get('/', Login::class)->name('login'); */

// Route::name("home-front")->get('/', function(){
//     Artisan::call('migrate');
//   dd(Artisan::output());
//   });



Route::name("home-front")->get('/', [frontEndController::class, 'index']);


Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');
 
Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/Home-config', HomeConfig::class)->name('homeConfig');
    Route::get('/projet', Billing::class)->name('projet');
    Route::get('/terrain', Terain::class)->name('terrain');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/service', Tables::class)->name('services');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/Actualite-Admin', Actu::class)->name('actualite');
    Route::get('/a-propos-admin', Apropos::class)->name('apropos');
    Route::get('/maison-admin', MaisonVirtuelle::class)->name('maison_v');
    Route::get('/maison-contemporaine-admin', LivewireMaisonContemporaine::class)->name('maison-contemporaine-admin');
    Route::get('/logement-collectif-admin', LivewireLogementCollectif::class)->name('logement-collectif-admin');
    Route::get('/maconnerie-generale-admin', LivewireMoconnerieGenerale::class)->name('maconnerie-generale-admin');
    Route::get('/rtl', Rtl::class)->name('rtl');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
    Route::get('/témoignage-admin', Temoignage::class)->name('temoignageAdmin');
    Route::get('/etape-admin', Etape::class)->name('etapeAdmin');
});

