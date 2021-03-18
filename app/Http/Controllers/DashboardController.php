<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class DashboardController extends Controller
{
    public function index()

    {
        $product = Product::count();
        $category = Category::count();

        return view('raasaa.dashboard', compact('product', 'category'));
    }
}
