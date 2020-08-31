<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
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
     * Show the form for creating a new re
     * source.
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
        
        $address=new Address;

        $hasprimary=Address::where('user_id',Auth::user()->id)->where('is_primary','0')->get();
        if(! empty($hasprimary)){
            return  redirect()->back()->with('message_primary', 'You have already one primary Address.');
        }
        else{
            dd('has not');
        }
        



        // dd($request->has('primary') ? 1 : 0);
        $address->user_id=Auth::user()->id;
        $address->is_primary=$request->has('primary') ? 1 : 0;
        $address->line1=$request->has('line1') ? $request->line1 : '';
        $address->line2=$request->has('line2') ? $request->line2 : '';
        $address->city=$request->city;
        $address->state=$request->state;
        $address->country=$request->country;
        $address->postalcode=$request->postalcode;
        $address->contact_number=$request->mobile;
        $address->address_type='0';

        $address->save();
        
        return redirect('addAddress');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        //
    }



    //Display Specific user all Address
    public function userAddresses(){
        $addresses=Address::where('user_id',Auth::user()->id)->get();
        // dd($products[0]->categories[0]);
       
         return view('admin/viewAddress')->with('addresses',$addresses);
    } 
}
