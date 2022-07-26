<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\MultiImage;
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


    // About Multi Image
    public function aboutMultiImage(){
        return view('admin.about-page.multimage');
    }

    public function StoreMultiImage(Request $request){

        $image = $request->file('multi_image');

        foreach ($image as $multi_image) {

           $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($multi_image)->resize(220,220)->save('upload/multi/'.$name_gen);
            $save_url = 'upload/multi/'.$name_gen;

            MultiImage::insertGetId([
                 
                'multi_image' => $save_url,
                'created_at' => Carbon::now()

            ]); 

        }

        $notification = array(
            'message' => 'Multi Image Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.multi.image')->with($notification);
    }

    public function AllMultiImage(){
        $allMultiImage = MultiImage::all();
        return view('admin.about-page.all_multiimage',compact('allMultiImage'));
    }

    public function editMultiImage($id){
        $multiImage = MultiImage::where('multi_image_id',$id)->firstOrFail();
        return view('admin.about-page.edit_multi_image',compact('multiImage'));
    }

    public function UpdateMultiImage(Request $request){

        $id = $request['id'];

        if ($request->file('multi_image')) {
            $image = $request->file('multi_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(220,220)->save('upload/multi/'.$name_gen);
            $save_url = 'upload/multi/'.$name_gen;

            MultiImage::where('multi_image_id', $id)->update([
                'multi_image' => $save_url,
            ]); 

            $notification = array(
                'message' => 'Multi Image Updated Successfully', 
                'alert-type' => 'success'
            );

            return redirect()->route('all.multi.image')->with($notification);
        }
    }

    public function DeleteMultiImage($id){

        $multi = MultiImage::where('multi_image_id',$id)->firstOrFail();
        $img = $multi->multi_image;
        unlink($img);

        MultiImage::where('multi_image_id', $id)->delete();

        $notification = array(
            'message' => 'Multi Image Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }


}
