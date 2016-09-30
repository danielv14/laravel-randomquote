{!! Form::open([
      'method' => 'DELETE',
      'route' => ['quotes.destroy', $quote->id]
  ]) !!}
  {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
{!! Form::close() !!}
