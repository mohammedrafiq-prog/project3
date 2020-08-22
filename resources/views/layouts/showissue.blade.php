@extends('layouts.app')
@section('content')
    <h1 class="text-secondary card-title">{{ $issue->name}} </h1>
  <div class="well">
    <h3><a class="btn list-group-item-danger">{{$issue->created_at}}</a></h3> 
    <hr>
    <p>{{ $issue->issue }}</p></div>
   <a href="create" class="btn btn-primary">GoBack</a>
    @endsection
    