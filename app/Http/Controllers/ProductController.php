<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductCategory;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

      
        
        if($request->path()=='viewProduct'){
            $products=Product::all();
            return view('admin/viewproduct')->with('products',$products);
        }
        else{
            
        $products=Product::paginate(6);
        $sliderProducts=Product::all();
            return view('index',compact('sliderProducts','products'));
        }
        
        
    }
    public function clothing(Request $request)
    {
        $products = Product::whereHas('categories', function ($q) {
            //conditions from role table
            $q->Where('name', 'Clothing');

        })->paginate(6);
        $sliderProducts=Product::all();
        return view('index',compact('sliderProducts','products'));
        
    }
    public function electronics(Request $request)
    {
        $products = Product::whereHas('categories', function ($q) {
            //conditions from role table
            $q->Where('name', 'Electronics');

        })->paginate(6);
        $sliderProducts=Product::all();
        return view('index',compact('sliderProducts','products'));
        
    }
    public function home_kitchen(Request $request)
    {
        $products = Product::whereHas('categories', function ($q) {
            //conditions from role table
            $q->Where('name', 'Home&Kitchen');

        })->paginate(6);
        $sliderProducts=Product::all();
        return view('index',compact('sliderProducts','products'));
    }
    public function beauty(Request $request)
    {
        $products = Product::whereHas('categories', function ($q) {
            //conditions from role table
            $q->Where('name', 'Beauty');

        })->paginate(6);
        $sliderProducts=Product::all();
        return view('index',compact('sliderProducts','products'));
    }
    public function toys(Request $request)
    {
        $products = Product::whereHas('categories', function ($q) {
            //conditions from role table
            $q->Where('name', 'Toys');

        })->paginate(6);
        $sliderProducts=Product::all();
        return view('index',compact('sliderProducts','products'));
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
        // dd($request);
        $product=new Product;
        if ($request->hasFile('image')) {

            $filename = time().".".$request->image->getClientOriginalExtension();

            $request->image->storeAs('uploads/products',$filename,'public');
           
            $product->name=$request->name;
            $product->image=$filename;
            $product->price=$request->price;
            $product->seller_id=Auth::user()->id;
            $product->description=$request->desc;

        //   dd($product);
            $product->save();

            foreach ($request->category as $cat) {
                $productCategory = new ProductCategory;
                $productCategory->product_id = $product->id;
                $productCategory->category_id = $cat;
                $productCategory->save();
            }
            
        }
        return redirect('addProduct');
    }

    /**
     * Display the specified resource.
     *
    //  * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
       $products=Product::with("categories")->where('seller_id',Auth::user()->id)->get();
        // dd($products[0]->categories[0]);
       
         return view('admin/viewproduct')->with('products',$products);
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

    public function showproduct($id){
        $product = Product::find($id);
        return view('showproduct')->with('product',$product);
    }
}
