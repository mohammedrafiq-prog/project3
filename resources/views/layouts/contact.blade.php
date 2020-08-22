@extends('layouts.app1')
@section('contact')
<h1>CONTACT</h1>  
{!! Form::open(['action' => 'issuec@store']) !!}
    <div class="form-group">
      {{Form::label('name', 'Name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
    </div>
    <div class="form-group">
      {{Form::label('email', 'E-Mail Address')}}
      {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email'])}}
    </div>
    <div class="form-group">
      {{Form::label('message', 'Message')}}
      {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter message'])}}
    </div>
    <div>
      {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}
@endsection