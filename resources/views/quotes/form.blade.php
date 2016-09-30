<div class="col-md-6 col-md-offset-3">

  {{-- Error handling --}}
  @include('errors.list')


  {{-- Author's title --}}
  <div class="form-group">
    {!! Form::label('author', 'Author of Quote') !!}
    {!! Form::text('author', null, [
      'class' => 'form-control',
      'placeholder' => 'What is the authors name'
      ]) !!}
  </div>

  {{-- The Quote --}}
  <div class="form-group">
    {!! Form::label('body', 'Quote') !!}
    {!! Form::textarea('body', null, [
      'class' => 'form-control',
      'rows' => '15',
      'placeholder' => 'Write the quote'
      ]) !!}
  </div>

  {{-- Submit --}}
  <div class="form-group">
    {!! Form::submit($submit, ['class' => 'btn btn-success center-block']) !!}
  </div>

</div>
