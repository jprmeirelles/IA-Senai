<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Xz_aiController;

Route::get('/team/create', [Xz_aiController::class, 'createTeam']);

Route::get('/teacher/{name}', [Xz_aiController::class, 'teacher']);

Route::get('/team/{name}', [Xz_aiController::class, 'team']);
