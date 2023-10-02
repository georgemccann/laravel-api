<?php
use App\Http\Controllers\TestsController;
use Illuminate\Support\Facades\Route;
 
 
Route::get('tests', [TestsController::class, 'index']);
Route::get('tests/{testId}', [TestsController::class, 'show']);
Route::put('tests/{testId}', [TestsController::class, 'update']);