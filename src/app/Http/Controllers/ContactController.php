<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
  {
    return view('index');
  }

    public function confirm(ContactRequest $request)
   {
     $contact = $request->only(['last_name', 'first_name',"gender",'email', "tel1","tel2","tel3", "address","building","type1","type2","type3",'content']);
     return view('confirm', compact('contact'));
   }

   /*public function store(ContactRequest $request)
   {
     $contact = $request->only(['last_name', 'first_name',"gender",'email', "tel1","tel2","tel3", "address","building","type1","type2","type3",'content']);
     Contact::create($contact);
     return view('thanks');
   }*/
}
