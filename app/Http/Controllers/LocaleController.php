<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCard;
use App\Models\ProductCategory;

class LocaleController extends Controller
{
    public function setLocale($locale)
    {
        if (in_array($locale, ['en', 'ja'])) {
            session(['locale' => $locale]);
        }

        $product_cards = ProductCard::all();
        $product_categories = ProductCategory::all();
        app()->setLocale($locale);

        return view('pages.main', compact('product_cards', 'product_categories'));
    }
}
