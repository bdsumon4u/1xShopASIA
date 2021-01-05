<?php

use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SiteStatusController;
use App\Http\Controllers\Admin\TopUpController as AdminTopUpController;
use App\Http\Controllers\Admin\UpdateTopUpController;
use App\Http\Controllers\Admin\UpdateWithdrawController;
use App\Http\Controllers\Admin\WithdrawController as AdminWithdrawController;
use App\Http\Controllers\TopUpController;
use App\Http\Controllers\WithdrawController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/topup', TopUpController::class)->name('topup');
Route::match(['get', 'post'], '/withdraw', WithdrawController::class)->name('withdraw');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::match(['get', 'post'], '/topups', AdminTopUpController::class)->name('topups');
    Route::match(['get', 'post'], '/topups/{topup}/edit', UpdateTopUpController::class)->name('topups.edit');
    Route::match(['get', 'post'], '/withdraws', AdminWithdrawController::class)->name('withdraws');
    Route::match(['get', 'post'], '/withdraws/{withdraw}/edit', UpdateWithdrawController::class)->name('withdraws.edit');

    Route::get('/settings/{tab?}', SettingController::class)->name('settings');
    Route::get('/site-status/{status}', SiteStatusController::class)->name('site-status');
});
