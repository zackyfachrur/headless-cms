<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KarirController;
use Illuminate\Http\Request;

/*
    Routes Halaman Admin Portfolio
_______________________________
*/

// Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
// Route::resource('portfolio', PortfolioController::class);
/*
    End Routes Halaman Admin Portfolio
_______________________________
*/

/*
    Routes Halaman Admin
*/

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->intended(route('login'));
    });

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/login', [LoginController::class, 'authenticate']);

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('pages.admin.dashboard');
        })->name('admin.dashboard');

        Route::get('/calendar', function () {
            return view('pages.admin.calendar');
        })->name('admin.calendar');

        Route::get('/portfolio', function () {
            return view('pages.admin.portfolio');
        })->name('admin.portfolio');

        // Portfolio Resources
        Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
        Route::resource('portfolio', PortfolioController::class);
        Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
        Route::put('/portfolio/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
        Route::delete('/portfolio/{id}/delete', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');

        // Karir Resources
        Route::get('/karir', [KarirController::class, 'index'])->name('karir.index');
        Route::resource('karir', KarirController::class);
        Route::get('/karir/{id}/edit', [KarirController::class, 'edit'])->name('karir.edit');
        Route::put('/karir/{id}', [KarirController::class, 'update'])->name('karir.update');

        Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
    });
});
/*
    End Routes Halaman Admin
*/

/*
    Routes Halaman
_______________________________
*/

Route::get("/", function () {
    return view("pages.home");
});

Route::get("/kontak", function () {
    return view("pages.contact");
});


Route::get('/portfolio', [PortfolioController::class, 'view'])->name('portfolio.view');
Route::get('/karir', [KarirController::class, 'view'])->name('karir.view');
/*
    End Routes Halaman
_______________________________
*/


/*
    Routes Halaman Layanan
_______________________________
*/
Route::get("/layanan/website", function () {
    return view("pages.layanan.website");
});
Route::get("/layanan/web-application", function () {
    return view("pages.layanan.web-app");
});

Route::get("/layanan/mobile-application", function () {
    return view("pages.layanan.mobile-app");
});
Route::get("/layanan/iot", function () {
    return view("pages.layanan.iot");
});
/*
_______________________________
    End Routes Halaman Layanan
*/
