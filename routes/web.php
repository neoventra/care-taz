<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\ContactEnquiryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about-us');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/faqs', [PageController::class, 'faqs'])->name('faqs');
Route::get('/join-us', [PageController::class, 'join'])->name('join-us');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact-us');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');
Route::get('/appointment', [PageController::class, 'appointment'])->name('appointment');

Route::get('/services', [PageController::class, 'servicesIndex'])->name('services.index');
Route::get('/services/{slug}', [PageController::class, 'serviceShow'])->name('services.show');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1')->name('login.store');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('admin.auth')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/contact-us', [ContactEnquiryController::class, 'index'])->name('contact-us.index');
        Route::get('/contact-us/data', [ContactEnquiryController::class, 'data'])->name('contact-us.data');
        Route::resource('blog', BlogPostController::class)->except(['show']);
    });
});

// Public blog exists for admin "View" links; not linked in public nav/footer.
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
