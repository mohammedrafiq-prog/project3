@extends('layouts.app')
@section('content')
@if (count($order))
@foreach ($order as $item)
    <div class="well">  
     <h3>{{$item->name}}  <a href="{{$item->id}}" class="btn list-group-item-danger">  {{$item->phone}}     </a>  {{ $item->address}}   {{$item->total}}$  {{$item->total/3.5}}</h3> 
    </div>
  @endforeach
@endif
<a href="/project6/project/home" class="btn btn-primary">GoBack</a>
@endsection