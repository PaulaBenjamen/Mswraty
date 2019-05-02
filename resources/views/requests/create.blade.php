
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
-->
@extends('layouts.app')
@section('content')
    

    <form action = {{url("/request")}} method = 'POST' >
    

<div class="form-group">
    <label name =address >address</label>
    <input type="text" name="address" class="form-control">
</div>
<div class="form-group">
    <label name =category>category</label>
    <input type="text" name="category" class="form-control">
</div>
<div class="form-group">
    <label name =contact_number>contact number</label>
    <input type="text" name="contact_number" class="form-control">
</div>

<div class="form-group">
        <label name =place>place</label>
        <input type="text" name="place" class="form-control">
    </div>

<div class="form-group">
    <label name =start_date>start date</label>
    <input type="date" name="start_date" class="form-control">
</div>
    @csrf 
   <input type="hidden" value="{{ csrf_token() }}">
<button type="submit" class="btn btn-primery">submit</button>
</form>

@endsection

 



