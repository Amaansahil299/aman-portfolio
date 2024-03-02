<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Store;
use Illuminate\Support\ServiceProvider;

class ComponentDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {


        view()->composer('components.menu.menu-item', function ($view) {
            $categories = Category::orderBy('id', 'asc')->take(6)->get();

            $stores = Store::orderBy('id', 'asc')->take(6)->get();
            $view->with('categories', $categories)->with('stores', $stores);
        });

        view()->composer('auth.login', function ($view) {
            $categories = Category::all();
            $stores = Store::all();
            $view->with('categories', $categories)->with('stores', $stores);
        });


        view()->composer('layouts.guest', function ($view) {
            $categories = Category::all();
            $stores = Store::all();
            $view->with('categories', $categories)->with('stores', $stores);
        });



        view()->composer('components.brands.top-brands', function ($view) {
            $topLimitedBrands = Brand::orderBy('id', 'desc')->take(6)->get();;
            $view->with('top_limited_brands', $topLimitedBrands);
        });


        view()->composer('components.coupons.top-coupons-list', function ($view) {
            $coupons = Coupon::orderBy('id', 'desc')->take(50)->get();;
            $view->with('coupons', $coupons);
        });

        view()->composer('components.navbar.categories-with-icons', function ($view) {
            $categories = Category::orderBy('id', 'asc')->take(18)->get();
            $view->with('categories', $categories);
        });



    }
}
