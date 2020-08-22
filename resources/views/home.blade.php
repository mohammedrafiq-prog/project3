@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('inc.mass')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <div class="well">
                    Name : {{ Auth::user()->name }} <br>
                    Email: {{ auth()->user()->email }}
                      </div>
                  <a href="issue/create" class="btn btn-secondary">contact</a> 
                  <a href="pizza/create" class="btn btn-secondary">Add</a> 
                  <a href="order/create" class="btn btn-secondary">order</a> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
