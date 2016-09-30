@extends('layouts.admin')

@section('content')
  <div class="container">
    <h1 class="text-center">Edit Quote by {{ $quote->author }}</h1>

    <div class="row">
      {!! Form::model($quote, ['method' => 'PATCH', 'route' => ['quotes.update', $quote->id]]) !!}
        @include('quotes.form', ['submit' => 'Update quote'])
      {!! Form::close() !!}
    </div>



    <div class="text-center">
      <a href="{{route('quotes.index')}}">Back</a>
    </div>


  </div>
@endsection
