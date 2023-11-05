<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create(){
        return view('pages.contact');
    }

    public function store(Request $request)
    {

        $this->validate($request, Contact::$rules);

        Contact::create([
            'contact' => $request->contact,
        ]);

        return redirect()->back();
    }
}
