<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CareerController;

// Language switching route
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

Route::get('/', [HomeController::class, 'index4'])->name('index');
Route::get('index-one-page', [HomeController::class, 'index_one_page'])->name('index-one-page');
Route::get('index-dark', [HomeController::class, 'index_dark'])->name('index-dark');
Route::get('index-2', [HomeController::class, 'index2'])->name('index-2');
Route::get('index-2-one-page', [HomeController::class, 'index_2_one_page'])->name('index-2-one-page');
Route::get('index-2-dark', [HomeController::class, 'index_2_dark'])->name('index-2-dark');
Route::get('index-3', [HomeController::class, 'index3'])->name('index-3');
Route::get('index-3-one-page', [HomeController::class, 'index_3_one_page'])->name('index-3-one-page');
Route::get('index-3-dark', [HomeController::class, 'index_3_dark'])->name('index-3-dark');
Route::get('index-4', [HomeController::class, 'index4'])->name('index-4');
Route::get('index-4-one-page', [HomeController::class, 'index_4_one_page'])->name('index-4-one-page');
Route::get('index-4-dark', [HomeController::class, 'index_4_dark'])->name('index-4-dark');
Route::get('index-5', [HomeController::class, 'index5'])->name('index-5');
Route::get('index-5-one-page', [HomeController::class, 'index_5_one_page'])->name('index-5-one-page');
Route::get('index-6', [HomeController::class, 'index6'])->name('index-6');
Route::get('index-6-one-page', [HomeController::class, 'index_6_one_page'])->name('index-6-one-page');
Route::get('index-7', [HomeController::class, 'index7'])->name('index-7');
Route::get('index-7-one-page', [HomeController::class, 'index_7_one_page'])->name('index-7-one-page');
Route::get('index-boxed', [HomeController::class, 'index_boxed'])->name('index-boxed');
Route::get('index-rtl', [HomeController::class, 'index_rtl'])->name('index-rtl');
Route::get('demo-landing', [HomeController::class, 'demo_landing'])->name('demo-landing');





// Pages
Route::get('home', [HomeController::class, 'index4'])->name('home');
Route::get('about', [PagesController::class, 'about'])->name('about');
Route::get('project', [PagesController::class, 'project'])->name('project');
Route::get('project-carousel', [PagesController::class, 'project_carousel'])->name('project-carousel');
Route::get('project-details', [PagesController::class, 'project_details'])->name('project-details');
Route::get('team', [PagesController::class, 'team'])->name('team');
Route::get('team-carousel', [PagesController::class, 'team_carousel'])->name('team-carousel');
Route::get('team-details', [PagesController::class, 'team_details'])->name('team-details');
Route::get('reviews', [PagesController::class, 'reviews'])->name('reviews');
Route::get('reviews-carousel', [PagesController::class, 'reviews_carousel'])->name('reviews-carousel');
Route::get('packages', [PagesController::class, 'packages'])->name('packages');
Route::get('packages-carousel', [PagesController::class, 'packages_carousel'])->name('packages-carousel');
Route::get('gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('photo-gallery', [PagesController::class, 'gallery_filter'])->name('photo-gallery');
Route::get('video-gallery', [PagesController::class, 'blog_carousel'])->name('video-gallery');
Route::get('gallery-grid', [PagesController::class, 'gallery_grid'])->name('gallery-grid');
Route::get('gallery-carousel', [PagesController::class, 'gallery_carousel'])->name('gallery-carousel');
Route::get('faq', [PagesController::class, 'faq'])->name('faq');
Route::get('login', [PagesController::class, 'login'])->name('login');

Route::get('services', [PagesController::class, 'services'])->name('services');
Route::get('services-carousel', [PagesController::class, 'services_carousel'])->name('services-carousel');
Route::get('services-two', [PagesController::class, 'services_two'])->name('services-two');
Route::get('services-two-carousel', [PagesController::class, 'services_two_carousel'])->name('services-two-carousel');
Route::get('business-growth', [PagesController::class, 'business_growth'])->name('business-growth');
Route::get('business-solution', [PagesController::class, 'business_solution'])->name('business-solution');
Route::get('marketing-solution', [PagesController::class, 'marketing_solution'])->name('marketing-solution');
Route::get('technology-services', [PagesController::class, 'technology_services'])->name('technology-services');
Route::get('business-marketing', [PagesController::class, 'business_marketing'])->name('business-marketing');
Route::get('business-support', [PagesController::class, 'business_support'])->name('business-support');
Route::get('products', [PagesController::class, 'products'])->name('products');
Route::get('products-left', [PagesController::class, 'products_left'])->name('products-left');
Route::get('products-right', [PagesController::class, 'products_right'])->name('products-right');
Route::get('products-carousel', [PagesController::class, 'products_carousel'])->name('products-carousel');
Route::get('product-details', [PagesController::class, 'product_details'])->name('product-details');
Route::get('cart', [PagesController::class, 'cart'])->name('cart');
Route::get('checkout', [PagesController::class, 'checkout'])->name('checkout');
Route::get('blog-grid', [PagesController::class, 'blog_grid'])->name('blog-grid');
Route::get('blog-grid-left', [PagesController::class, 'blog_grid_left'])->name('blog-grid-left');
Route::get('blog-grid-right', [PagesController::class, 'blog_grid_right'])->name('blog-grid-right');
Route::get('blog-list', [PagesController::class, 'blog_list'])->name('blog-list');
Route::get('blog-list-left', [PagesController::class, 'blog_list_left'])->name('blog-list-left');
Route::get('blog-list-right', [PagesController::class, 'blog_list_right'])->name('blog-list-right');
Route::get('blog-details', [PagesController::class, 'blog_details'])->name('blog-details');
Route::get('blog-details-left', [PagesController::class, 'blog_details_left'])->name('blog-details-left');
Route::get('blog-details-right', [PagesController::class, 'blog_details_right'])->name('blog-details-right');
Route::get('contact', [PagesController::class, 'contact'])->name('contact');
Route::get('career', [PagesController::class, 'career'])->name('career');
Route::post('career/apply', [CareerController::class, 'apply'])->name('career.apply');

Route::fallback([PagesController::class, 'not_found']);