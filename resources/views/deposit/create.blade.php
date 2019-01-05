@extends('layout.master')
@section('contenido')

	<div class="container">
  <h2>New Deposit</h2>
  <form class="form-horizontal" action="{{route('deposit.store')}}" method="POST">
  	{{csrf_field()}}
    <div class="form-group">
      <label class="control-label col-sm-2" for="type">Type:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="type" placeholder="Enter type" name="type">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="sender_address">sender address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sender_address" placeholder="Enter sender address" name="sender_address">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="rec_addres">Rec address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="rec_addres" placeholder="Enter Rec Address" name="rec_address">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tx_id">tx id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tx_id" placeholder="Enter Tx id" name="tx_id">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="amount">Amount:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="amount" placeholder="Enter amount" name="amount">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Save</button>
      </div>
    </div>
  </form>
</div>

		<a href="{{route('address.index')}}">List</a>
@stop