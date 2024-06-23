<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BuatLowonganController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobProviderController;
use App\Http\Controllers\JobSeekerController;
use App\Http\Controllers\KehidupanBudayaController;
use App\Http\Controllers\LamarPekerjaanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LowonganKerjaController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\Post;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SendEmail;
use App\Http\Controllers\SocialController;
use App\Models\JobVacancy;
use App\Models\Lowker;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;







Route::group(['middleware' => 'guest'], function(){
    Route::get('/', [AuthController::class, 'login'])->name('login');
});

// Route::group(['middleware' => ['auth', 'verified']], function() {
//     Route::get('/link-kerjaku', [AuthController::class, 'getLogin']);
// });

// Route::get('/link-kerjaku', function () {
//     return view('Beranda.beranda-after-login');
// })->middleware(['auth', 'verified']);

Route::group(['middleware' => ['auth', 'checkrole:1,2']], function() {
    Route::post('/logout',[LoginController::class, 'logout'])->name('logout');
    Route::get('redirect', [RedirectController::class, 'cek']);
});

Route::group(['middleware' => ['auth', 'checkrole:2']], function(){
    Route::get('/perusahaan', [PerusahaanController::class, 'getShowHomePagePerusahaan']);

    Route::get('/DetailPerusahaan', [PerusahaanController::class, 'getShowDetailPerusahaan']);
    Route::get('/LihatPerusahaan', [PerusahaanController::class, 'getshowLihatPerusahaan']);
    Route::get('/LihatPerusahaan2', [PerusahaanController::class, 'getShowLihatPerusahaan2']);
    Route::get('/ProfillPerusahaan', [PerusahaanController::class, 'getShowProfillPerusahaan']);
    Route::get('/HomePagePerusahaan', [PerusahaanController::class, 'getShowHomePagePerusahaan']);
    Route::get('/Kontak-Perusahaan', [PerusahaanController::class, 'getShowKontakPerusahaan']);

    
    
});
Route::get('/BuatLowongan', [JobSeekerController::class, 'index']);
Route::get('/BuatLowongan2', [LowonganKerjaController::class, 'getShowBuatLowongann']);
Route::get('/BuatLowongan3', [LowonganKerjaController::class, 'getShowBuatLowongannn']);
Route::post('/BuatLowongan', [JobProviderController::class, 'store']);
Route::post('/BuatLowongan2', [JobProviderController::class, 'storePage']);
Route::post('/BuatLowongan3', [JobProviderController::class, 'storePageThree']);

Route::get('/PageLogin-Dashboard', [DashboardController::class, 'getShowLoginDashboard']);
Route::get('/PageDashboard', [DashboardController::class, 'getShowDashboardHome'])->middleware('auth');
Route::get('/PageOverlay-Dashboard', [DashboardController::class, 'getShowOverlay'])->middleware('auth');
Route::get('/Page-DokumenPelamar', [DashboardController::class, 'getShowDokumen'])->middleware('auth');
Route::get('/Page-BuatLowongan', [DashboardController::class, 'getShowCreateLowongan'])->middleware('auth');
Route::get('/Page-BuatLowongan2', [DashboardController::class, 'getShowCreateLowongan2'])->middleware('auth');
Route::get('/Page-BuatLowongan3', [DashboardController::class, 'getShowCreateLowongan3'])->middleware('auth');
Route::get('/Page-LihatLowongan', [DashboardController::class, 'getShowLihatLowongan'])->middleware('auth');
Route::get('/Page-LowonganKerja', [DashboardController::class, 'getShowPageLowonganKerja'])->middleware('auth');
Route::get('/Page-Profill', [DashboardController::class, 'getShowProfill']);
Route::get('/Page-StatusPelamar', [DashboardController::class, 'getShowStatus']);
Route::get('/Page-EditProfill', [DashboardController::class, 'getShowEdit']);

Route::group(['middleware' => ['auth', 'checkrole:1']], function(){
    Route::get('/link-kerjaku', function(){return view('Beranda.beranda-after-login',[]);})->middleware('auth');

    Route::get('/ProfillPelamar', [PelamarController::class, 'getShowProfillPelamar']);
    Route::get('/HomePagePelamar', [PelamarController::class, 'getShowHomePagePelamar']);
    
    
    Route::resource('applications', ApplicationController::class);
});
Route::get('/StatusPelamar', [PelamarController::class, 'getShowStatusPelamar']);
Route::get('/LamarPekerjaan', [LowonganKerjaController::class, 'getShowLamarKerja']);
Route::get('/LamarPekerjaan2', [LowonganKerjaController::class, 'getShowLamarKerjaa']);
Route::get('/LamarPekerjaan3', [LowonganKerjaController::class, 'getShowLamarKerjaaa']);
Route::post('/LamarPekerjaan', [LamarPekerjaanController::class, 'postDescriptions']);
Route::post('/LamarPekerjaan2', [LamarPekerjaanController::class, 'postLocations']);
Route::post('/LamarPekerjaan3', [LamarPekerjaanController::class, 'postMoreInfor']);

Route::get('/auth/redirect', [SocialController::class, 'redirect'])->name('google.redirect');
Route::get('/google/redirect', [SocialController::class, 'googleCallback'])->name('google.callback');

Route::get('auth/redirect/facebook', [FacebookController::class, 'redirectToFacebook'])->name('auth.facebook');
Route::get('facebook/redirect', [FacebookController::class, 'handleFacebookCallback'])->name('facebook.callback');

Route::get('/', function(){return view('Beranda.beranda',[]);});
Route::get('/link-kerjaku', function(){return view('Beranda.beranda-after-login',[]);})->middleware('auth');
// login
Route::get('/login', [LoginController::class, 'getShowLogin']);
Route::post('/login', [LoginController::class, 'getAuthenticateLogin']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/loginperusahaan', [LoginController::class, 'getShowLoginPerusahaan']);
Route::post('loginperusahaan', [LoginController::class, 'getAuthenticateLogin']);

//register
Route::get('/register', [RegisterController::class, 'getShowRegister']);
Route::post('/register', [RegisterController::class, 'getStoreRegister']);
Route::get('/registerperusahaan', [RegisterController::class, 'getShowRegisterPerusahaan']);
Route::post('/registerperusahaan', [RegisterController::class, 'getStoreRegisterPerusahaan']);

//perusahaan
// Route::get('/DetailPerusahaan', [PerusahaanController::class, 'getShowDetailPerusahaan']);
// Route::get('/LihatPerusahaan', [PerusahaanController::class, 'getshowLihatPerusahaan']);
// Route::get('/LihatPerusahaan2', [PerusahaanController::class, 'getShowLihatPerusahaan2']);
// Route::get('/ProfillPerusahaan', [PerusahaanController::class, 'getShowProfillPerusahaan']);
// Route::get('/HomePagePerusahaan', [PerusahaanController::class, 'getShowHomePagePerusahaan']);
// Route::get('/Kontak-Perusahaan', [PerusahaanController::class, 'getShowKontakPerusahaan']);

//lowongankerja
// Route::get('/BuatLowongan', [JobSeekerController::class, 'index']);
// Route::get('/BuatLowongan2', [LowonganKerjaController::class, 'getShowBuatLowongann']);
// Route::get('/BuatLowongan3', [LowonganKerjaController::class, 'getShowBuatLowongannn']);
// Route::post('/BuatLowongan', [JobProviderController::class, 'store']);
// Route::post('/BuatLowongan2', [JobProviderController::class, 'storePage']);
// Route::post('/BuatLowongan3', [JobProviderController::class, 'storePageThree']);

// Route::get('/lowongan/{id}', [JobProviderController::class, 'show']);
Route::get('/lowongan-kerja', [JobController::class, 'index']);

Route::get('/result', [JobProviderController::class, 'result']);
Route::get('/resultLamar', [LamarPekerjaanController::class, 'resultLamar']);
Route::get('/lowongankerja', [LowonganKerjaController::class, 'getShowLowonganKerja']);
Route::get('/lowongankerja2', [LowonganKerjaController::class, 'getShowLowonganKerjaa']);
Route::get('/unggahlowongan', [LowonganKerjaController::class, 'getShowUnggahLowongan']);
Route::get('/lowongandisimpan', [LowonganKerjaController::class, 'saveLowongan']);
Route::get('/DetailPekerjaan', [LowonganKerjaController::class, 'getShowDetailKerja']);

//about
Route::get('/about', [AboutController::class, 'getShowAboutt']);
Route::get('/about2', [AboutController::class, 'getShowAbout']);
Route::get('/aboutperusahaan', [AboutController::class, 'getShowAboutPerusahaan']);

//Route::get('/StatusPelamar', [PelamarController::class, 'getShowStatusPelamar']);
// Route::get('HomePagePelamar', [PelamarController::class, 'getShowHomePagePelamar']);

//blog
Route::get('/detailblog', [BlogController::class, 'getDetailBlog']);
Route::get('/detailblog2', [BlogController::class, 'getDetailSecBlog']);
Route::get('/detailblog3', [BlogController::class, 'getDetailThirdBlog']);
Route::post('/detailblog', [BlogController::class, 'postBlog']);
Route::get('/kehidupanbudaya', [KehidupanBudayaController::class, 'getShowKB']);

Route::get('/PopUpStatus', function () {return view('PopUpStatus', ["title" => "PopUpStatus"]);});

Route::get('/disimpan', function () {return view('disimpan', ["title" => "saved"]);});

// RESET PASSWORD
Route::get('/forgot-password', function () {return view('auth.forgot-password');})->middleware('guest')->name('password.request');

Route::get('/kontak', [ContactController::class, 'getShowContact']);

Route::get('/send-newsletter', [SendEmail::class, 'sendNewsLetter']);
Route::get('/email-verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/link-kerjaku');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::resource('job-seekers', JobSeekerController::class);
Route::resource('job-providers', JobProviderController::class);
Route::get('/edit/{id}', [JobController::class,'edit'])->name('jobs.edit');
Route::put('job/{id}', [JobController::class, 'update'])->name('job.update');
Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');
// Route::resource('jobs', JobController::class);
// Route::resource('applications', ApplicationController::class);

Route::get('/findjob', function(){return view('findjob',[]);});
Route::get('/search', [JobProviderController::class, 'search'])->name('search');
Route::get('/apply/{job}', [JobApplicationController::class, 'create'])->name('apply.create');
Route::post('/apply', [JobApplicationController::class, 'store'])->name('apply.store');

// Route::get('/LamarPekerjaan', [LowonganKerjaController::class, 'getShowLamarKerja']);
// Route::get('/LamarPekerjaan2', [LowonganKerjaController::class, 'getShowLamarKerjaa']);
// Route::get('/LamarPekerjaan3', [LowonganKerjaController::class, 'getShowLamarKerjaaa']);
// Route::get('/pekerjaan', [LowonganKerjaController::class, 'getShowPekerjaan']);
// Route::post('/LamarPekerjaan', [LamarPekerjaanController::class, 'postDescriptions']);
// Route::post('/LamarPekerjaan2', [LamarPekerjaanController::class, 'postLocations']);
// Route::post('/LamarPekerjaan3', [LamarPekerjaanController::class, 'postMoreInfor']);

Route::get('/daftar-perusahaan', [DashboardController::class, 'getShowRegisterDashboard']);
// Route::get('/PageDashboard', [DashboardController::class, 'getShowDashboardHome']);
// Route::get('/PageLogin-Dashboard', [DashboardController::class, 'getShowLoginDashboard']);
// Route::get('/dashboard-overlay', [DashboardController::class, 'getShowOverlay']);
// Route::get('/Page-BuatLowongan', [DashboardController::class, 'getShowCreateLowongan']);
// Route::get('/Page-BuatLowongan2', [DashboardController::class, 'getShowCreateLowongan2']);
// Route::get('/Page-BuatLowongan3', [DashboardController::class, 'getShowCreateLowongan3']);
// Route::get('/Page-LihatLowongan', [DashboardController::class, 'getShowLihatLowongan']);
// Route::get('/Page-LowonganKerja', [DashboardController::class, 'getShowPageLowonganKerja']);
// Route::get('/Page-Profill', [DashboardController::class, 'getShowProfill']);
// Route::get('/Page-StatusPelamar', [DashboardController::class, 'getShowStatus']);
// Route::get('/Page-EditProfill', [DashboardController::class, 'getShowEdit']);