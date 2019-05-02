@extends('layouts.app')
@section('content')
@foreach ($users as $user)
<div class="card" style="width: 18rem;display: inline-block">
  <img class="card-img-top" src="/image/no_image.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$user->name}}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="/photographer/{{$user->id}}" class="btn btn-primary">profile</a>
  </div>
</div>
@endforeach 

  
@endsection
