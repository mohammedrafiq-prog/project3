@extends('layouts.app1')
@section('contact')
<h1>CONTACT</h1>  
{!! Form::open(['action' => 'pizzac@store']) !!}
    <div class="form-group">
      {{Form::label('name', 'Name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
    </div>
    <div class="form-group">
      {{Form::label('price', 'price')}}
      {{Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'price'])}}
    </div>
    <div class="form-group">
      {{Form::label('message', 'Message')}}
      {{Form::textarea('desc', '', ['class' => 'form-control', 'placeholder' => 'desc'])}}
    </div>
    <div>
      {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}
@endsection