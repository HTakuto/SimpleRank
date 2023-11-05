<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ProductCard;
use App\Models\ProductCategory;

class ViewDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $product_cards = ProductCard::all();
            $product_categories = ProductCategory::all();
            $view->with(compact('product_cards', 'product_categories'));
        });
    }
}
