<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function enquiry(Request $request)
    {
        //validate
        $request->validate([

            'name' => 'required',
            'email' => 'required|min:6|max:12',
            'subject' => 'required',
            'description' => 'required',
        ]);
        //validate
        //insert data into database
        $enquiry = new contact();
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->subject = $request->subject;
        $enquiry->description = $request->description;
        $save_enq = $enquiry->save();
        
        if ($save_enq) {

            return redirect()->back()->with('success', 'Your response was submitted successfully');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong...try again later');
        }
        //insert data into database    
    }
}