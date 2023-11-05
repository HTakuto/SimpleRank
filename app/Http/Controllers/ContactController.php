<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ProductCard;
use App\Models\ProductCategory;

class ContactController extends Controller
{
    public function create(){
        $product_cards = ProductCard::all();
        $product_categories = ProductCategory::all();

        return view('pages.contact', compact('product_cards', 'product_categories'));
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
