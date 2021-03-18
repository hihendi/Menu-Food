<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $search;

    protected $updateQueryString = ['search'];
    public function updatingSearch()
    {
        $this->resetPage();
    }



    public function render()
    {
        if ($this->search) {
            $products = Product::where('name', 'like', '%'.$this->search.'%')->paginate(9);
        }
         else{
            $products = Product::paginate(9);
        }
    return view('livewire.product-index', ['products' => $products, 'title'=> 'List Foods']);
    }
}
