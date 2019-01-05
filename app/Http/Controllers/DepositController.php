<?php

namespace App\Http\Controllers;

use App\Deposit;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deposit=Deposit::all()->sortBy('id');
        return view('deposit.index',compact('deposit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('deposit.create');
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
            'amount'=>'numeric'
        ]

        );

        $create=Deposit::create($request->all());
        $request->session()->flash('completed', 'Deposit saved successfully');
        return redirect()->route('deposit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function show(Deposit $deposit)
    {
         return view('deposit.show',compact('deposit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function edit(Deposit $deposit)
    {
        return view('deposit.edit',compact('deposit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deposit $deposit)
    {
        $request->validate([
            'type'=>'required',
            'amount'=>'numeric'
        ]);
        $deposit->type=$request->type;
        $deposit->sender_address=$request->sender_address;
        $deposit->rec_address=$request->rec_address;
        $deposit->tx_id=$request->tx_id;
        $deposit->amount=$request->amount;
        $deposit->save();
        $request->session()->flash('completed', 'Edition successfully');
        return redirect()->route('deposit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deposit $deposit)
    {
        $deposit->delete();
        Session()->flash('completed', 'Deleted Deposit');
         return redirect()->route('deposit.index');
    }
}
