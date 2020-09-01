<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\CartItem;
use App\OrderItem;
use App\Transaction;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        // $products=Product::with("categories")->where('seller_id',Auth::user()->id)->get();
        $users=User::with('roles')->get();
        // dd($users);
       
         return view('admin/viewUser')->with('users',$users);
    }

    /** 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function placeOrder(Request $request)
    {

        $order=new Order;
        $order->user_id=Auth::user()->id;
        $order->address_id=$request->address_id;
        $order->status=0;
        $order->transaction_id=0;
        $order->save();

        $cartItems=CartItem::where('user_id',Auth::user()->id)->get();

        foreach($cartItems as $cartItem){
          $orderItem=new OrderItem;
          $orderItem->order_id=$order->id;
          $orderItem->product_id=$cartItem->id;
          $orderItem->quantity=$cartItem->quantity;
          $orderItem->save();
        }
        
        $transaction=new Transaction;
        $transaction->receipt_number=time().Auth::user()->id;
        $transaction->status=1;
        $transaction->payment_method_id=$request->payment;
        $transaction->save();

        $placedOrder=Order::where('id',$order->id)->first();
        $placedOrder->transaction_id=$transaction->id;
        $placedOrder->save();

        $cartItem=CartItem::where('user_id',Auth::user()->id)->delete();

        return redirect('cart')->with('order_message','Your order has been Placed.');

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
