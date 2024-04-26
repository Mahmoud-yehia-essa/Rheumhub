<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function AddContact()
    {

        $contact = Contact::find(1);

        return view('admin.contact.add_contact',compact("contact"));




    }



    public function UpdateContactStore(Request $request)
    {

        $contact = Contact::find(1);



        $contact->des = $request->des;
        $contact->save();

        $notification = array(
            'message' => 'About Contact Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.add.Contact')->with($notification);




    }
}
