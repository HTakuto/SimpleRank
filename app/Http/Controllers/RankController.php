<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rank;
use App\Models\ProductCard;

class RankController extends Controller
{
    public function index(){
        $product_cards = ProductCard::all();

        return view('pages.main', compact('product_cards'));
    }
}
