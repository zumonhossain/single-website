<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
use App\Models\About;
use App\Models\Portfolio;

class WebsiteController extends Controller{
    public function index(){
        $homePortfolio = Portfolio::latest()->get();
        $homeAbout = About::where('about_id',1)->firstOrFail();
        $homeSlider = HomeSlider::where('home_slider_id',1)->firstOrFail();
        return view('website.home-all.index',compact('homeSlider','homeAbout','homePortfolio'));
    }

    public function homeAbout(){
        $aboutpage = About::where('about_id',1)->firstOrFail();
        return view('website.about-page.about_page',compact('aboutpage'));

     }
}
