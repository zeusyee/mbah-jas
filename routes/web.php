<?php

// routes/web.php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('/reservasi', [ReservationController::class, 'index'])->name('reservation.index');
Route::post('/reservasi', [ReservationController::class, 'store'])->name('reservation.store');