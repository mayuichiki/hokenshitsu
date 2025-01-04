<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenstrualController;
use App\Http\Controllers\MenstrualRecordController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;


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

// Welcomeページ
Route::get('/', function () {
    return view('welcome');
});

// ダッシュボード関連ルート
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); // メインダッシュボード
    Route::get('/dashboard/record', [DashboardController::class, 'record'])->name('dashboard.record'); // 記録ページ
    Route::get('/dashboard/chat', [DashboardController::class, 'chat'])->name('dashboard.chat'); // チャットページ
    Route::get('/dashboard/report', [DashboardController::class, 'report'])->name('dashboard.report'); // レポートページ
});

// プロフィール関連ルート
Route::middleware('auth')->group(function () {
    Route::get('/profile', [MenstrualController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [MenstrualController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [MenstrualController::class, 'destroy'])->name('profile.destroy');
});

// 生理データ管理ルート
Route::middleware('auth')->group(function () {
    Route::get('/menstrual', [MenstrualController::class, 'index'])->name('menstrual.index');
    Route::post('/menstrual', [MenstrualController::class, 'store'])->name('menstrual.store');
    Route::get('/menstrual/{id}/edit', [MenstrualController::class, 'edit'])->name('menstrual.edit');
    Route::put('/menstrual/{id}', [MenstrualController::class, 'update'])->name('menstrual.update');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/menstrual-records', [MenstrualRecordController::class, 'index'])->name('menstrual_records.index');
    Route::post('/menstrual-records', [MenstrualRecordController::class, 'store'])->name('menstrual_records.store');
});

// チャット関連ルート
Route::middleware('auth')->group(function () {
    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::post('/chat', [ChatController::class, 'send'])->name('chat.send');
});

// レポート関連ルート
Route::middleware('auth')->group(function () {
    Route::get('/report', [ReportController::class, 'index'])->name('report.index');
    Route::post('/report', [ReportController::class, 'generate'])->name('report.generate');
});

require __DIR__.'/auth.php';
