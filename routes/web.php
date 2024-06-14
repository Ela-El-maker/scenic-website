<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogSectionSettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\FeedbacksController;
use App\Http\Controllers\Admin\FeedbackTitleController;
use App\Http\Controllers\Admin\FooterCompanyInfoController;
use App\Http\Controllers\Admin\FooterProductsController;
use App\Http\Controllers\Admin\FooterSocialController;
use App\Http\Controllers\Admin\FooterSupportController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\PortfolioItemController;
use App\Http\Controllers\Admin\PortfolioSectionSettingController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\ProjectSectionTitleController;
use App\Http\Controllers\Admin\SEOSettingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceSectionSettingController;
use App\Http\Controllers\Admin\ServiceSpecificController;
use App\Http\Controllers\Admin\SettingController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('portfolio-details/{id}', [HomeController::class, 'showPortfolio'])->name('show.portfolio');

Route::get('service-details/{id}', [HomeController::class, 'showService'])->name('show.service');

Route::get('blog-details/{id}', [HomeController::class, 'showBlog'])->name('show.blog');


Route::get('blogs', [HomeController::class, 'blog'])->name('blog');

Route::post('contact', [HomeController::class, 'contact'])->name('contact');

Route::group([
    'middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'
], function () {
    Route::resource('hero', HeroController::class);

    Route::resource('about', AboutController::class);

    /*** Category Route */
    Route::resource('category', CategoryController::class);

    /*** Portfolio Item Route */
    Route::resource('portfolio-item', PortfolioItemController::class);

    /**** Portfolio Section Setting Route */
    Route::resource('portfolio-section-setting', PortfolioSectionSettingController::class);

    /**** Projects Section Setting Route */
    Route::resource('projects-section-setting', ProjectSectionTitleController::class);
    Route::resource('project', ProjectsController::class);

    /**** Service Section Setting Route */
    Route::resource('service', ServiceController::class);
    Route::resource('service-specific', ServiceSpecificController::class);
    Route::resource('service-section-setting', ServiceSectionSettingController::class);

    Route::resource('experience', ExperienceController::class);

    /***Feedback Section Title */

    Route::resource('feedback-title', FeedbackTitleController::class);
    Route::resource('feedback-section', FeedbacksController::class);

    /*** Blog Category Route */
    Route::resource('blog-category', BlogCategoryController::class);
    Route::resource('blog-section-setting', BlogSectionSettingController::class);
    Route::resource('blog', BlogController::class);

    /****Footers Routes */
    Route::resource('footer-products', FooterProductsController::class);
    Route::resource('footer-company', FooterCompanyInfoController::class);
    Route::resource('footer-support', FooterSupportController::class);
    Route::resource('footer-social', FooterSocialController::class);


    /*** Settings */
    Route::get('settings', SettingController::class)->name('settings.index');

    Route::resource('general-setting', GeneralSettingController::class);

    Route::resource('seo-setting', SEOSettingController::class);
});
