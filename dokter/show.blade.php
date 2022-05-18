@extends('dokters.layout')
@section('content')
<div class="card">
  <div class="card-header">dokters Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">firstname : {{ $dokters->firstname }}</h5>
        <p class="card-text">lastname : {{ $dokters->lastname }}</p>
        <p class="card-text">phone : {{ $dokters->phone }}</p>
        <p class="card-text">email : {{ $dokters->email }}</p>
        <p class="card-text">Address : {{ $dokters->address }}</p>
        <p class="card-text">post : {{ $dokters->post }}</p>
      
  </div>
      
    </hr>
  
  </div>
</div>