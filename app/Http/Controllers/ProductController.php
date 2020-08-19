<?php

namespace App\Http\Controllers;

use App\Product;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products=Product::paginate(6);

        return view('index')->with('products',$products);
        
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product=new Product;
        if ($request->hasFile('image')) {
            $filename = time().".".$request->image->getClientOriginalExtension();

            $request->image->storeAs('uploads/products',$filename,'public');
           
            
            $product->name=$request->name;
            $product->image=$filename;
            $product->price=$request->price;
            $product->seller_id=1;
            $product->description=$request->desc;

        //   dd($product);
            $product->save();
            
        }
        return redirect('product/create');
    }

    /**
     * Display the specified resource.
     *
    //  * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
