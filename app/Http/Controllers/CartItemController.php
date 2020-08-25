<?php

namespace App\Http\Controllers;

use App\CartItem;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $cartItem= CartItem::all();

        $cartItems = CartItem::with("product")->get();
        // dd($cartItems[0]);
       
         return view('cart')->with('cartItems',$cartItems);
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
    public function store($product_id)
    {
        //


        if(Auth::user()){

        $cartItem=new CartItem;
        // dd($product_id);
       $item=CartItem::where('product_id',$product_id)->first();
        // dd($item[0]);

    
        if($item == null){
            $cartItem->product_id=$product_id;
            $cartItem->user_id=Auth::user()->id;
            $cartItem->quantity=1;
        //   dd($product);
            $cartItem->save();
        }
        else{
            
            $item->quantity= $item->quantity+1;
            // dd($item[0]);
            $item->update();
        }
            // session()->flash('msg', 'Successfully Product added in Cart.');
            return redirect()->back();
       
    }
    else{
        return redirect('login');
    }

       


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function show(CartItem $cartItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function edit(CartItem $cartItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartItem $cartItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartItem $cartItem)
    {
        //
    }
}
