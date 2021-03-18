<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Product;
use App\Category;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Product::all();

        return view('raasaa.product.pages.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Category::all();
        return view('raasaa.product.pages.create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric',
            'is_ready' => 'required|boolean',
            'description' => 'required',
        ]);

        $data = $request->all();
        // dd($data);
        $data['image'] = $request->file('image')->store('assets/product');

        
        Product::create($data);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::findorFail($id);
        $category = Category::where('id', $data->category_id)->get();

        return view('raasaa.product.pages.show', compact('data', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::findORFail($id);
        $items = Category::all();


        return view('raasaa.product.pages.edit', compact('data', 'items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric',
            'is_ready' => 'required|boolean',
            'description' => 'required',
        ]);

        $data = $request->all();
        $item = Product::FindOrFail($id);
        $oldImage = $item->image;

        if ($oldImage == $request->file('image')) {
            $item->update($data);
        } else {
            Storage::delete($oldImage);

            $data['image'] = $request->file('image')->store('assets/product');

            $item->update($data);
        }

        return redirect()->route('products.index');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        Storage::delete($data->image);
        $data->delete();

        return redirect()->route('products.index');
    }
}
