@extends('layouts.app')
@section('content')
<div><label>photosession date:{{$req->date}}</label></div>
<div><label>photosession category:      {{$req->category}}</label></div>
<div><label>photosession place:     {{$req->place}}</label></div>
<div><label>client contact number:     {{$req->contact_number}}</label></div>
@endsection