<?php

use App\Http\Controllers\BiayaController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\SantriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokumenSantriController;
use App\Http\Controllers\FormPendafataranController;
use App\Http\Controllers\IdentitasSantriController;
use App\Http\Controllers\JenjangController;
use App\Http\Controllers\OrangtuaController;
use App\Http\Controllers\OrtuSantriController;
use App\Http\Controllers\StatusPendaftaranController;
use App\Http\Controllers\WaliSantriController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('homepage.pages.home');
});

// Route::get('register', [SantriRegisterController::class, 'register'])->name('user.register');
// Route::get('login', [SantriRegisterController::class, 'login'])->name('user.login');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // ini adalah route untuk Santri
        // Route::get('/santri', [SantriController::class, 'index']);
        Route::get('/santri', [IdentitasSantriController::class, 'index']);

        Route::get('/santri/create', [SantriController::class, 'create']);
        Route::post('/santri/store', [SantriController::class, 'store']);
        Route::get('/santri/edit/{id}', [SantriController::class, 'edit']);
        Route::post('/santri/update', [SantriController::class, 'update']);
        Route::get('/santri/show/{id}', [SantriController::class, 'show']);
        // Route::get('/santri/delete/{id}', [SantriController::class, 'destroy']);

        // ini adalah route untuk Jenjang
        Route::get('/jenjang', [JenjangController::class, 'index']);
        Route::get('/jenjang/create', [JenjangController::class, 'create']);
        Route::post('/jenjang/store', [JenjangController::class, 'store']);
        Route::get('/jenjang/edit/{id}', [JenjangController::class, 'edit']);
        Route::post('/jenjang/update', [JenjangController::class, 'update']);
        Route::get('/jenjang/show/{id}', [JenjangController::class, 'show']);
        Route::get('/jenjang/delete/{id}', [JenjangController::class, 'destroy']);

        // ini adalah route untuk Orang Tua
        Route::get('/orangtua', [OrangtuaController::class, 'index']);
        Route::get('/orangtua/create', [OrangtuaController::class, 'create']);
        Route::post('/orangtua/store', [OrangtuaController::class, 'store']);
        Route::get('/orangtua/edit/{id}', [OrangtuaController::class, 'edit']);
        Route::post('/orangtua/update', [OrangtuaController::class, 'update']);
        Route::get('/orangtua/show/{id}', [OrangtuaController::class, 'show']);
        Route::get('/orangtua/delete/{id}', [OrangtuaController::class, 'destroy']);

        // ini adalah route untuk Status Pendaftaran
        Route::get('/status_pendaftaran', [StatusPendaftaranController::class, 'index']);
        Route::get('/status_pendaftaran/edit/{id}', [StatusPendaftaranController::class, 'edit']);
        Route::post('/status_pendaftaran/update', [StatusPendaftaranController::class, 'update']);
        Route::get('/status_pendaftaran/show/{id}', [StatusPendaftaranController::class, 'show']);
        // Route::get('/status_pendaftaran/delete/{id}', [StatusPendaftaranController::class, 'destroy']);


        // ini adalah route untuk Pendaftaran
        Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
        Route::get('/pendaftaran/create', [PendaftaranController::class, 'create']);
        Route::post('/pendaftaran/store', [PendaftaranController::class, 'store']);
        Route::get('/pendaftaran/edit/{id}', [PendaftaranController::class, 'edit']);
        Route::post('/pendaftaran/update', [PendaftaranController::class, 'update']);
        Route::get('/pendaftaran/show/{id}', [PendaftaranController::class, 'show']);
        // Route::get('/pendaftaran/delete/{id}', [PendaftaranController::class, 'destroy']);

        // ini adalah route untuk Biaya
        Route::get('/biaya', [BiayaController::class, 'index']);
        Route::get('/biaya/create', [BiayaController::class, 'create']);
        Route::post('/biaya/store', [BiayaController::class, 'store']);
        Route::get('/biaya/edit/{id}', [BiayaController::class, 'edit']);
        Route::post('/biaya/update', [BiayaController::class, 'update']);
        Route::get('/biaya/show/{id}', [BiayaController::class, 'show']);
        // Route::get('/biaya/delete/{id}', [BiayaController::class, 'destroy']);
    });

    Route::prefix('user')->group(function () {

        Route::get('form-pendaftaran', [FormPendafataranController::class, 'index'])->name('form-pendaftaran.index');
        Route::get('pendaftar-dashboard', [FormPendafataranController::class, 'dashboard'])->name('pendaftar.dashboard');
        Route::get('form-pendaftaran-ortu', [FormPendafataranController::class, 'ketOrtu'])->name('form-pendaftaran.ortu');
        Route::get('form-pendaftaran-wali', [FormPendafataranController::class, 'ketWali'])->name('form-pendaftaran.wali');
        Route::get('form-pendaftaran-dokumen', [FormPendafataranController::class, 'dokumen'])->name('form-pendaftaran.dokumen');
        Route::get('pendaftar-status', [FormPendafataranController::class, 'status'])->name('pendaftar.status');

        Route::put('identitas-santri/update/{identitasSantri}', [IdentitasSantriController::class, 'update'])->name('identitasSantri.update');
        Route::post('ortu-santri/update', [OrtuSantriController::class, 'update'])->name('ortuSantri.update');
        Route::post('wali-santri/update', [WaliSantriController::class, 'update'])->name('waliSantri.update');
        Route::post('dokumen-santri/update', [DokumenSantriController::class, 'update'])->name('dokSantri.update');
    });
});
