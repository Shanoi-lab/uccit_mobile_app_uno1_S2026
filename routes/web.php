<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdmissionsController;
use App\Http\Controllers\SocialController;

// Home / Main Menu
Route::get('/', [HomeController::class, 'index'])->name('home');

// Faculty & Staff Directory
Route::get('/directory', [DirectoryController::class, 'index'])->name('directory.index');

// Courses
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

// Admissions
Route::get('/admissions', [AdmissionsController::class, 'index'])->name('admissions.index');

// Social Media
Route::get('/social', [SocialController::class, 'index'])->name('social.index');
