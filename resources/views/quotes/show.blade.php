@extends('layouts.admin')

@section('content')

  <div class="container">
    <h1>{{ $quote->author }}</h1>
    <p>{{ $quote->body }}</p>
    <a href="{{ route('quotes.edit', $quote->id) }}">Edit</a>
    @include('quotes.deleteAction')
    <br>
    <a href="{{ route('quotes.index') }}">Back</a>
  </div>

@endsection
