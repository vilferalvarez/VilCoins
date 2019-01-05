@extends('layout.master')
@section('contenido')
	<div class="container">
		<div class="panel panel-primary">
      		<div class="panel-heading"><strong>Addres detail ID:{{$address->id}}</strong></div>
      		<div class="panel-body">
      			<ul>
					<li><strong>Type:</strong>{{$address->type}}</li>
					<li><strong>Address:</strong>{{$address->address}}</li>
					<li><strong>Publickey:</strong>{{$address->publickey}}</li>
					<li><strong>PK:</strong>{{$address->pk}}</li>
					<li><strong>Secret:</strong>{{$address->secret}}</li>
					<li><strong>Saldo:</strong>{{$address->saldo}}</li>
				</ul>


      		</div>
      		<div class="panel-footer"><strong><a href="{{route('address.index')}}">Back to List</a></strong></div>
    	</div>
	</div>
	
	
	
@stop