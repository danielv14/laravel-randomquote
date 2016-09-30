@extends('layouts.admin')


@section('content')
  <div class="container">
    <h1 class="text-center">Create a new quote</h1>


    <div class="row">
      {!! Form::open(['route' => 'quotes.store']) !!}
        @include('quotes.form', ['submit' => 'Create quote'])
      {!! Form::close() !!}
    </div>


    <div class="text-center">
      <a href="{{route('quotes.index')}}">Back</a>
    </div>

  </div>




@endsection
