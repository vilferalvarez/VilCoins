@extends('layout.master')
@section('contenido')
	<div class="container">
		<div class="panel panel-primary">
      		<div class="panel-heading"><strong>Payment detail ID:{{$payment->id}}</strong></div>
      		<div class="panel-body">
      			<ul>
					<li><strong>Type:</strong>{{$payment->type}}</li>
					<li><strong>Rec Address:</strong>{{$payment->rec_address}}</li>
					<li><strong>Tx ID:</strong>{{$payment->text_id}}</li>
					<li><strong>Amount:</strong>{{$payment->amount}}</li>
				</ul>


      		</div>
      		<div class="panel-footer"><strong><a href="{{route('payment.index')}}">Back to List</a></strong></div>
    	</div>
	</div>
	
	
	
@stop