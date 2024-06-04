<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;

Route::get('/', [CourseController::class, 'index'])->name('courses.index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('courses/{course}/book', [CourseController::class, 'book'])->name('courses.book');
Route::resource('courses', CourseController::class);
Route::resource('bookings', BookingController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
Route::put('/user/bookings/{booking}/pending', [UserController::class, 'sendBooking'])->name('user.booking.pending');
Route::put('/user/bookings/{booking}/reject', [UserController::class, 'discardBooking'])->name('user.booking.reject');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::put('/admin/bookings/{booking}/accept', [AdminController::class, 'acceptBooking'])->name('admin.booking.accept');
Route::put('/admin/bookings/{booking}/reject', [AdminController::class, 'rejectBooking'])->name('admin.booking.reject');



require __DIR__ . '/auth.php';
