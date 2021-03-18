<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;
use App\Category;

class Homepage extends Component
{
    public function render()
    {
        $product = Product::take(6)->get();
        $categories = Category::all();
        return view('livewire.homepage', ['product' => $product, 'categories' => $categories]);
    }
}
