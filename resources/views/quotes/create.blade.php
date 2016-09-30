@extends('layouts.admin')


@section('content')
  <div class="container">
    <h1 class="text-center">Create a new quote</h1>



  {!! Form::open(['route' => 'quotes.store']) !!}
    @include('quotes.form', ['submit' => 'Create quote'])
  {!! Form::close() !!}

  </div>


@endsection
