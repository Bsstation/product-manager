<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Company;
use App\Models\Movement;
use Carbon\Carbon;

class SiteController extends Controller
{
    public function index()
    {
        $today = Carbon::today();

        $movements = Movement::whereDate('created_at', $today)->paginate(5);

        $products = Product::where('status', 'enabled')->get();
        $companies = Company::where('status', 'enabled')->get();

        return view('site.home', [
            'movements' => $movements,
            'products' => $products,
            'companies' => $companies,
        ]);
    }

    public function products()
    {
        $products = Product::paginate(5);

        return view('site.products', ['products' => $products]);
    }

    public function companies()
    {
        $companies = Company::paginate(5);

        return view('site.companies', ['companies' => $companies]);
    }

    public function movements()
    {
        $movements = Movement::paginate(5);

        $products = Product::where('status', 'enabled')->get();
        $companies = Company::where('status', 'enabled')->get();

        return view('site.movements', [
            'movements' => $movements,
            'products' => $products,
            'companies' => $companies,
        ]);
    }

    public function reports() {
        $products = Product::where('status', 'enabled')->get();
        $companies = Company::where('status', 'enabled')->get();

        return view('site.reports', [
            'products' => $products,
            'companies' => $companies,
        ]);
    }

    public function login()
    {
        return view('site.login');
    }
}
