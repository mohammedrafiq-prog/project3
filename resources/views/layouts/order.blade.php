@extends('layouts.app1')
@section('contact')
    
@foreach ($pizzas->all() as $item)
 
{!! Form::open(['action' => 'orderc@store']) !!}
   
    <div class="well" >
    <img src="{{asset('public/front/img/tech_photo8.jpg')}}" alt="img not fouund"><br>
     {{$item->name}} <br>
     {{$item->price}}<br>
     {{$item->desc}}<br>
  <input class="btn" type="checkbox" name="{{ $item->id }}">
    </div>
@endforeach
<div class="well">   
<div class="form-group">
      {{Form::label('name', 'Name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
    </div>
    <div class="form-group">
      {{Form::label('Address', 'Address')}}
      {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'enter address'])}}
    </div>
    <div class="form-group">
      {{Form::label('number', 'number')}}
      {{Form::text('number', '', ['class' => 'form-control', 'placeholder' => 'Enter message'])}}
    </div>
    </div>
    <div>
    {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    </div>
 {!! Form::close() !!}
@endsection