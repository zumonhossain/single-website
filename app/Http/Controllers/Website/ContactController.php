<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;

class ContactController extends Controller{
    public function contact(){
        return view('website.contact-page.contact');
    }

    public function storeMessage(Request $request){
        Contact::insertGetId([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message, 
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Your Message Submited Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function ContactMessage(){
        $contacts = Contact::latest()->get();
        return view('admin.contact.allcontact',compact('contacts'));
    }

    public function DeleteMessage($id){
     
        Contact::where('contact_id', $id)->delete();

        $notification = array(
            'message' => 'Your Message Deleted Successfully', 
            'alert-type' => 'success'
        );
   
        return redirect()->back()->with($notification);
    }
}
