<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function all_contact()
    {
        $contacts = Contact::all();
        return view('backend_pages.contact.all_contact', compact('contacts'));

    }



    public function send_ask(Request $request)
    {
        $validated = $request->validate([
            'email'     => 'required|email',
            'ask'       => 'required',

        ]);

        $email = $request->email;
        $ask   = $request->ask;

        $contacts = Contact::create([
            'email'  => $email,
            'ask'    => $ask,
        ]);

        $contacts->save();

        return response()->json([
            'message' => 'the ask is send succesfully',
        ] , 400);  

    }

    public function destroy($id)
    {
        $contacts = Contact::find($id);
        $contacts->delete();
        return redirect()->back();
    }
}
