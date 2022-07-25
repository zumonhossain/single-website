<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Carbon\Carbon;
use Image;

class AboutController extends Controller{
    public function aboutPage(){
        $aboutpage=About::where('about_id',1)->firstOrFail();
        return view('admin.about-page.about_page_all',compact('aboutpage'));
    }

    public function UpdateAbout(Request $request){

        $id = $request['id'];

        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(523,605)->save('upload/home_about/'.$name_gen);
            $save_url = 'upload/home_about/'.$name_gen;

            About::where('about_id', 1)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'about_image' => $save_url,

            ]); 

            $notification = array(
                'message' => 'About Page Updated with Image Successfully', 
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        } else{

            About::where('about_id', 1)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,

            ]); 

            $notification = array(
                'message' => 'About Page Updated without Image Successfully', 
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }

    }

}
