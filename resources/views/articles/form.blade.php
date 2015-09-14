<div class="form-group">
{!! Form::label('title', 'Title:') !!}
{!! Form::text('title', null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('body', 'Description') !!}
    {!! Form::textarea('body','', ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('published_at', 'Publish On') !!}
    {!! Form::input('date','published_at', date('Y-m-d'), ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'form-control']) !!}
</div>