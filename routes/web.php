<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController\DashboardAdminController;
use App\Http\Controllers\MemberController\DashboardMemberController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', function () {
    if (Auth::user()->role == 'admin') {
        return redirect('/admin/dashboard');
    } elseif (Auth::user()->role == 'member') {
        return redirect('/member/dashboard');
    }
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->middleware('userAkses:admin');
    Route::get('/member/dashboard', [DashboardMemberController::class, 'index'])->middleware('userAkses:member');

    Route::post('/logout', [SesiController::class, 'logout']);
});
