@extends('layout.master')
@section('contenido')
	<div class="container">
		<div class="panel panel-primary">
      		<div class="panel-heading"><strong>Addres detail ID:{{$deposit->id}}</strong></div>
      		<div class="panel-body">
      			<ul>
					<li><strong>Type:</strong>{{$deposit->type}}</li>
					<li><strong>Sender Address:</strong>{{$deposit->sender_address}}</li>
					<li><strong>Rec Address:</strong>{{$deposit->rec_address}}</li>
					<li><strong>Tx ID:</strong>{{$deposit->tx_id}}</li>
					<li><strong>Amount:</strong>{{$deposit->amount}}</li>
				</ul>


      		</div>
      		<div class="panel-footer"><strong><a href="{{route('deposit.index')}}">Back to List</a></strong></div>
    	</div>
	</div>
	
	
	
@stop