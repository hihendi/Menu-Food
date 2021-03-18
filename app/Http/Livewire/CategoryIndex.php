<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Category;
use App\Product;

class CategoryIndex extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.category-index', ['categories' => $categories]);
    }
}
