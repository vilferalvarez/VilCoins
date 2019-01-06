@extends('layout.master')
@section('contenido')

	<div class="container">
  <h2>Update Address</h2>
  <form class="form-horizontal" action="{{route('payment.update',$payment->id)}}" method="POST">
  	{{csrf_field()}}
  	{{method_field('PUT')}}
     <div class="form-group">
      <label class="control-label col-sm-2" for="type">Type:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="type" placeholder="Enter type" name="type" value="{{$payment->type}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="rec_addres">Rec address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="rec_addres" placeholder="Enter Rec Address" name="rec_address" value="{{$payment->rec_address}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="text_id">text id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="text_id" placeholder="Enter Tx id" name="text_id" value="{{$payment->text_id}}">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="amount">Amount:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="amount" placeholder="Enter amount" name="amount" value="{{$payment->amount}}">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Save edit</button>
      </div>
    </div>
  </form>
</div>

	
	<a href="{{route('payment.index')}}">List</a>
@stop