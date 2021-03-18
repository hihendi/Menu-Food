<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Product;
use App\Category;

class ProductCategory extends Component
{
    use WithPagination;

    public $search, $category;

    protected $updateQueryString = ['search'];
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($id)
    {
        $categoryFood = Category::find($id);

        if($categoryFood)
        {
            $this->category = $categoryFood;
        }

    }

    public function render()
    {
        if ($this->search) {
            $products = Product::where('category_id', $this->category->id)->where('name', 'like', '%'.$this->search.'%')->paginate(3);
        }
         else{
            $products = Product::where('category_id', $this->category->id)->paginate(3);
        }
    return view('livewire.product-index', ['products' => $products, 'title' => 'Foods '.$this->category->name]);
    }
}
