<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
use Carbon\Carbon;
use Image;

class HomeSliderController extends Controller{
    public function homeSlider(){
        $data=HomeSlider::where('home_slider_id',1)->firstOrFail();
        return view('admin.home-slide.home_slide_all',compact('data'));
    }

    public function updateSlider(Request $request){
        $id = $request['id'];

        if ($request->file('slide_image')) {
            $image = $request->file('slide_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(636,852)->save('upload/slide_image/'.$name_gen);
            $save_url = 'upload/slide_image/'.$name_gen;

            HomeSlider::where('home_slider_id', 1)->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'video_url' => $request->video_url,
                'slide_image' => $save_url,
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ]); 

            $notification = array(
                'message' => 'Home Slide Updated with Image Successfully', 
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        } else{

            HomeSlider::where('home_slider_id', 1)->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'video_url' => $request->video_url,  
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ]);

            $notification = array(
                'message' => 'Home Slide Updated without Image Successfully', 
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        }
    }
}
