@extends('app')

@section('title')
    Editar Artigo
@stop

@section('content')

    {!! Form::model($article,['method' => 'PATCH', 'action' => ['ArticlesController@update',$article->id]]) !!}
        @include('articles.form', ['submitButtonText' => 'Update Article'])
    {!! Form::close() !!}

  @include('errors.list')

@stop
@stop