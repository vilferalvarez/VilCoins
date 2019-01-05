@extends('layout.master')
@section('estilos')
<style type="text/css">
	.special form{
		display: inline;
	}
	.center{
		text-align: center;
	}
	.right{
		text-align: right;
	}
</style>

@stop
@section('contenido')
	
<div class="container-fluyd">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<table class="table table-striped">
			    <thead>
			      <tr>
	
			         <th>Amount</th>
			         <th colspan="2" class="right"><a href="{{route('deposit.create')}}" class="btn btn-info">Add+</a></th>
			      </tr>
			    </thead>
			    <tbody>
			    	@if(count($deposit)) 
			    	@foreach($deposit as $ad)
			    	<tr>
			    		
			    		<td><a href="{{route('deposit.show',$ad->id)}}">{{$ad->amount}}</a></td>
			    		<td class="special center"><a href="{{route('deposit.edit',$ad->id)}}" class="btn btn-default" role="button">Update</a>
			    		
			    			<form action="{{route('deposit.destroy',$ad->id)}}" class="form-inline" method="post">
								{{csrf_field()}}
								{{method_field('DELETE')}}
								<input type="submit" name="eliminar" value="Delete" class="btn btn-danger">
							</form>
					    </td>	
			    	</tr>
			    	@endforeach
			    	@else
			    	<tr>
			    		<td colspan="2"><h2>No Deposit</h2></td>
			    	</tr>
			    	
			    	@endif
			    </tbody>
			</table>
		</div>

	</div>

</div>

@stop
