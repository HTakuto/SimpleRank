<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ProductCard;
use App\Models\ProductCategory;

class ContactController extends Controller
{
    public function index(){
        $product_cards = ProductCard::all();
        $product_categories = ProductCategory::all();
        return view('pages.contact', compact('product_cards', 'product_categories'));
    }
}
