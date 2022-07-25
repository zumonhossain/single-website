<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\AboutController;


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
Route::group(['prefix'=>'admin'], function(){
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

    

});




// ================= Website Routes ======================
Route::get('/',[WebsiteController::class, 'index']);
Route::get('/about',[WebsiteController::class,'homeAbout'])->name('home.about');






















require __DIR__.'/auth.php';
