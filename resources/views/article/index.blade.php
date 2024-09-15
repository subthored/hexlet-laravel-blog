@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    <h2><a href="articles/create">Создать статью</a></h2>
    @foreach ($articles as $article)
        <p></p>
        <a href="articles/{{$article->id}}">{{$article->name}}</a>
        <div>{{Str::limit($article->body, 200)}}</div>
        <a href="articles/{{$article->id}}/edit">Редактировать</a>
        <a href="articles/{{$article->id}}" data-confirm="Вы уверены?" data-method="delete"
           rel="nofollow">Удалить</a>
    @endforeach
@endsection
