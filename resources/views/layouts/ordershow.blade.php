@extends('layouts.app')
@section('content')
   <div class="well">
       @foreach ($order->billings as $item)
           <li class="list-group-item-light">{{ $item->name  }}  {{$item->desc }}  {{ $item->price }}$</li>
       @endforeach
   </div>
   
   <a href="create" class="btn btn-primary">GoBack</a>
    @endsection
    