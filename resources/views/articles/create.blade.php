@extends('app')
@section('title')
    Write An Article
@stop
@section('subtitle')
    Write an Article
@stop
@section('content')
    <h1>Write an article!!!</h1>

    <hr/>
    {!!  Form::open(['url' => 'articles']) !!}

    @include('articles.form', ['submitButtonText' => 'Add Article'])

    {!! Form::close() !!}

    @include('errors.list')

@stop