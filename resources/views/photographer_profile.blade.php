@extends('layouts.app')
@section('content')
<div class="form-group">
    {{$user->name}}
</div>

<div class="form-group">
    <label>rate:<div id="rateYo"></div></label>
        {{$user->rate}}
</div>

<div class="form-group">
    <label>price per hour</label>
            {{$user->price}}
</div> 


<a href="/request/create">request</a>
<script>
$(function () {
 
    $("#rateYo").rateYo({
      rating: 3.6
    });
   
  });
  </script>
@endsection