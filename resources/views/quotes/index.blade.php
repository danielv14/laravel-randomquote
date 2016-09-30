@extends('layouts.admin')

@section('content')
  <div class="container">
    <h1>All Quotes</h1>

    @foreach ($quotes->chunk(2) as $chunk)
      <div class="row">
        @foreach ($chunk as $quote)
          <div class="col-sm-6">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="{{route('quotes.show', $quote->id)}}">Quote by {{ $quote->author }}</a></h3>
              </div>
              <div class="panel-body">
                {{ str_limit($quote->body, 150) }}
              </div>
              <div class="panel-footer clearfix">
                <a href="{{ route('quotes.show', $quote->id) }}">View</a>
              </div>
            </div>
          </div>

        @endforeach
      </div>

    @endforeach

    <a href="{{ route('quotes.create') }}">Create new quote</a>

  </div>



@endsection
