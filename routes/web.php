<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ZoneMasterController;
use App\Http\Controllers\ErtmemberController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SpecializationController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::get('/dashboard', [DashboardController::class, 'zone']);
// Route::get('/', [DashboardController::class, 'dashboard']);

    Route::get('/zonemaster', [ZonemasterController::class, 'index'])->name('ertdash.zonemaster.index');
    Route::get('/zonemaster/add', [ZonemasterController::class, 'create'])->name('ertdash.zonemaster.create');
    Route::get('/zonemaster/edit', [ZonemasterController::class, 'edit'])->name('ertdash.zonemaster.edit');
    Route::get('/zonemaster/view', [ZonemasterController::class, 'show'])->name('ertdash.zonemaster.show');
    Route::post('/ertdash/zonemaster/store', [ZonemasterController::class, 'store'])->name('ertdash.zonemaster.store');


    Route::get('/specialization', [SpecializationController::class, 'index'])->name('ertdash.specialization.index');
    Route::get('/specialization/add', [SpecializationController::class, 'create'])->name('ertdash.specialization.create');
    Route::get('/specialization/edit/{id}', [SpecializationController::class, 'edit'])->name('ertdash.specialization.edit');
    Route::get('/specialization/view', [SpecializationController::class, 'show'])->name('ertdash.specialization.show');
    Route::post('ertdash/specialization/store', [SpecializationController::class, 'store'])->name('ertdash.specialization.store');
    Route::delete('ertdash/specialization/{id}', [SpecializationController::class, 'destroy'])->name('ertdash.specialization.destroy');


    Route::get('/ertmember', [ErtmemberController::class, 'index'])->name('ertdash.ertmember.index');
    Route::get('/ertmember/add', [ErtmemberController::class, 'create'])->name('ertdash.ertmember.create');
    Route::get('/ertmember/edit', [ErtmemberController::class, 'edit'])->name('ertdash.ertmember.edit');
    Route::get('/ertmember/view', [ErtmemberController::class, 'show'])->name('ertdash.ertmember.show');
    // Route::post('/ertdash/ertmember/store', [ErtmemberController::class, 'store'])->name('ertdash.ertmember.store');

    Route::get('/reports', [ReportsController::class, 'index'])->name('ertdash.reports.index');