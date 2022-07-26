<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\PortfolioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');



// ================= Admin Routes ======================
Route::group(['prefix'=>'admin','middleware'=>['auth']], function(){
    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');
    Route::get('/profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('/edit/profile',[AdminController::class,'editProfile'])->name('edit.profile');
    Route::post('/store/profile',[AdminController::class,'storeProfile'])->name('store.profile');
    Route::get('/change/password',[AdminController::class,'changePassword'])->name('change.password');
    Route::post('/update/password',[AdminController::class,'updatePassword'])->name('update.password');

    // HomeSlider
    Route::get('/home/slider',[HomeSliderController::class,'homeSlider'])->name('home.slider');
    Route::post('/update/slider',[HomeSliderController::class,'updateSlider'])->name('update.slider');


    // About
    Route::get('/about/page',[AboutController::class,'aboutPage'])->name('about.page');
    Route::post('/update/about',[AboutController::class,'updateAbout'])->name('update.about');
    
    // About Multi Image
    Route::get('/about/multi/image',[AboutController::class,'aboutMultiImage'])->name('about.multi.image');
    Route::post('/store/multi/image',[AboutController::class,'storeMultiImage'])->name('store.multi.image');
    Route::get('/all/multi/image',[AboutController::class,'allMultiImage'])->name('all.multi.image');
    Route::get('/edit/multi/image/{id}',[AboutController::class,'editMultiImage'])->name('edit.multi.image');
    Route::post('/update/multi/image',[AboutController::class,'updateMultiImage'])->name('update.multi.image');
    Route::get('/delete/multi/image/{id}',[AboutController::class,'deleteMultiImage'])->name('delete.multi.image');

    // Portfolio
    Route::get('/all/portfolio',[PortfolioController::class,'allPortfolio'])->name('all.portfolio');
    Route::get('/add/portfolio',[PortfolioController::class,'addPortfolio'])->name('add.portfolio');
    Route::post('/store/portfolio',[PortfolioController::class,'storePortfolio'])->name('store.portfolio');
    Route::get('/edit/portfolio/{id}',[PortfolioController::class,'editPortfolio'])->name('edit.portfolio');
    Route::post('/update/portfolio',[PortfolioController::class,'updatePortfolio'])->name('update.portfolio');
    Route::get('/delete/portfolio/{id}',[PortfolioController::class,'deletePortfolio'])->name('delete.portfolio');
    Route::get('/portfolio',[PortfolioController::class,'homePortfolio'])->name('home.portfolio');

    

});




// ================= Website Routes ======================
Route::get('/',[WebsiteController::class, 'index']);
Route::get('/about',[WebsiteController::class,'homeAbout'])->name('home.about');
Route::get('/portfolio/details/{id}',[WebsiteController::class,'portfolioDetails'])->name('portfolio.details');

// Contact
Route::get('/contact',[ContactController::class,'contact'])->name('contact.me');
Route::post('/store/message',[ContactController::class,'storeMessage'])->name('store.message');
Route::get('/admin/contact/message',[ContactController::class,'contactMessage'])->name('contact.message')->middleware('auth');
Route::get('/admin/delete/message/{id}',[ContactController::class,'deleteMessage'])->name('delete.message')->middleware('auth');






















require __DIR__.'/auth.php';
