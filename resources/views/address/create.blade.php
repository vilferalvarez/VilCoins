@extends('layout.master')
@section('contenido')

	<div class="container">
  <h2>New Address</h2>
  <form class="form-horizontal" action="{{route('address.store')}}" method="POST">
  	{{csrf_field()}}
    <div class="form-group">
      <label class="control-label col-sm-2" for="type">Type:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="type" placeholder="Enter type" name="type">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Addres:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="publickey">Publickey:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="publickey" placeholder="Enter publickey" name="publickey">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="PK">PK:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="PK" placeholder="Enter PK" name="pk">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="secret">Secret:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="secret" placeholder="Enter Secret" name="secret">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="saldo">Saldo:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="saldo" placeholder="Enter saldo" name="saldo">
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