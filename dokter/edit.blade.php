@extends('dokters.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('dokter/' .$dokters->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$dokters->id}}" id="id" />
        <label>firstname</label></br>
        <input type="hidden" name="firstname" id="firstname" value="{{$dokters->firstname}}" class="form-control"></br>
        <label>lastname</label></br>
        <input type="hidden" name="lastname" id="lastname" value="{{$dokters->lastname}}" class="form-control"></br>
        <label>phone</label></br>
        <input type="hidden" name="phone" id="phone" value="{{$dokters->phone}}" class="form-control"></br>
        <label>email</label></br>
        <input type="text" name="email" id="email" value="{{$dokters->email}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$dokters->address}}" class="form-control"></br>
        <label>post</label></br>
        <input type="text" name="post" id="post" value="{{$dokters->post}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop