@extends('layouts.app')

@section('content')

      <div class="flex-container">
        <p>{{ $quote->body }} - <strong>{{$quote->author}}</strong></p>
      </div>

      <div class="flex-container">
        <randomizebutton></randomizebutton>
      </div>


@endsection
