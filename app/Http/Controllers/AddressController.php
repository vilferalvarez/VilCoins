<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Session;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address=Address::all()->sortBy('id');
        return view('address.index',compact('address'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type'=>'required',
            'saldo'=>'numeric'
        ]

        );

        $create=Address::create($request->all());
        $request->session()->flash('completed', 'Address saved successfully');
        return redirect()->route('address.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Adrress  $adrress
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {

            return view('address.show',compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adrress  $adrress
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        return view('address.edit',compact('address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adrress  $adrress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
         $request->validate([
            'type'=>'required',
            'saldo'=>'numeric'
        ]);
        $address->type=$request->type;
        $address->address=$request->address;
        $address->publickey=$request->publickey;
        $address->pk=$request->pk;
        $address->secret=$request->secret;
        $address->saldo=$request->saldo;
        $address->save();
        $request->session()->flash('completed', 'Edition successfully');
        return redirect()->route('address.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adrress  $adrress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        $address->delete();
        Session()->flash('completed', 'Deleted Address');
         return redirect()->route('address.index');
    }
}
