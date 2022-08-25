@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $contacts->name }}</h5>
        <p class="card-text">lastname : {{ $contacts->lastname }}</p>
        <p class="card-text">email : {{ $contacts->email }}</p>
        <p class="card-text">Phone : {{ $contacts->mobile }}</p>
  </div>
      
    </hr>
  
  </div>
</div>