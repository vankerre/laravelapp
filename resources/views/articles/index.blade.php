@extends('app')
@section('title')
    Artigos Cadastrados
@stop
@section('subtitle')
        Artigos Cadastrados
       <small><a href="{{url('articles/create')}}">Criar um artigo</a></small>
@stop
@section('content')

<!-- /.row -->

<!-- /.row -->

<div class="col-lg-6">
    <h2>Artigos Cadastrados</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>

            <tr>
                <th>Titulo Artigo</th>
                <th>Desc</th>
                <th>Data/Hora</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
            <tr>
                <td><a href="{{action('ArticlesController@show', [$article->id])}}">{{$article->title}}</td></a>
                <td>{{$article->body}}</td>
                <td>{{$article->published_at}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
    @stop