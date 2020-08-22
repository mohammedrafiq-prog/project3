@extends('layouts.app')
@section('content')
@if (count($issue))
  @foreach ($issue as $item)
      <div class="well">  
     <h3>{{$item->issue }}<a href="{{$item->id}}" class="btn list-group-item-danger">{{ $item->name }} </a></h3> 
      </div>
  @endforeach
@endif
@endsection