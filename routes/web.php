<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\FeedbacksController;
use App\Http\Controllers\Admin\FeedbackTitleController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\PortfolioItemController;
use App\Http\Controllers\Admin\PortfolioSectionSettingController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceSectionSettingController;
use App\Http\Controllers\Admin\ServiceSpecificController;
use App\Http\Controllers\Frontend\HomeController;
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

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/service', function () {
    return view('frontend.service');
});

Route::get('/service-details', function () {
    return view('frontend.service-details');
});

Route::get('/portfolio', function () {
    return view('frontend.portfolio');
});

Route::get('/portfolio-details', function () {
    return view('frontend.portfolio-details');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/blog-details', function () {
    return view('frontend.blog-details');
});

Route::get('/testimonials', function () {
    return view('frontend.testimonials');
});

Route::get('/gallery', function () {
    return view('frontend.gallery');
});

Route::get('/faq', function () {
    return view('frontend.faq');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('portfolio-details/{id}', [HomeController::class, 'showPortfolio'])->name('show.portfolio');

Route::get('service-details/{id}', [HomeController::class, 'showService'])->name('show.service');


Route::group([
    'middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::resource('hero', HeroController::class);
    
    Route::resource('about', AboutController::class);
    
    /*** Category Route */
    Route::resource('category', CategoryController::class);

    /*** Portfolio Item Route */
    Route::resource('portfolio-item', PortfolioItemController::class);

    /**** Portfolio Section Setting Route */
    Route::resource('portfolio-section-setting', PortfolioSectionSettingController::class);

    /**** Service Section Setting Route */
    Route::resource('service', ServiceController::class);
    Route::resource('service-specific', ServiceSpecificController::class);
    Route::resource('service-section-setting', ServiceSectionSettingController::class);

    Route::resource('experience', ExperienceController::class);

    /***Feedback Section Title */

    Route::resource('feedback-title', FeedbackTitleController::class);
    Route::resource('feedback-section', FeedbacksController::class);
    


});