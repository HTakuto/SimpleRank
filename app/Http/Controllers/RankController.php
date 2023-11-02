<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCard;
use App\Models\ProductCategory;

class RankController extends Controller
{
    public function index(){
        $product_cards = ProductCard::all();
        $product_categories = ProductCategory::all();
        return view('pages.main', compact('product_cards', 'product_categories'));
    }
}
