<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('products.index',compact('products'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // saving all prices values to pass to view for selection
        $prices = \App\Models\Price::all();

        //Returning the create view for products
        return view('products.create', compact('prices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // input validation
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        
        
        // creation of a new product in the database
        //$arrayToString = implode(',',$request->input('show_option'));
        
        $inputValue = $request->all();
       // $inputValue['show_option'] = $arrayToString;
        $inputValue['show_option'] = $request->input('show_option');


        Product::create($inputValue);

        // redirection with a message
        return redirect()->route('products.index')->with('success','Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $prices = $product->prices()->get()->pluck('value');
        return view('products.show',compact('product','prices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // saving all prices values to pass to view for selection
        $prices = \App\Models\Price::all();

        return view('products.edit',compact('product','prices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // input validation
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        // update the considered product in the database
        $product->update($request->all());

        // redirection with a message
        return redirect()->route('products.index')->with('success','Product edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // product deletion
        $product->delete();

        // user redirection with a success message
        return redirect()->route('products.index')->with('success','Product deleted successfully');
    }
}
