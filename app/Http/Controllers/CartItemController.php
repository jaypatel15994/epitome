<?php

namespace App\Http\Controllers;

use App\CartItem;
use App\Product;
use Illuminate\Http\Request;

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


        $cartItem=new CartItem;
        // dd($product_id);
       $item=CartItem::where('product_id',2)->get();
        if($item == null){
            $cartItem->product_id=$product_id;
            $cartItem->user_id=1;
            $cartItem->quantity=1;
        //   dd($product);
            $cartItem->save();
        }
        else{
            
            $item[0]->quantity= $item[0]->quantity+1;
            // dd($item[0]);
            $item[0]->update();
        }
            // session()->flash('msg', 'Successfully Product added in Cart.');
            return redirect()->back();
       


       


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
