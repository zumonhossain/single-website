<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;

class WebsiteController extends Controller{
    public function index(){
        $homeSlider = HomeSlider::where('home_slider_id',1)->firstOrFail();
        return view('website.home.home',compact('homeSlider'));
    }
}
