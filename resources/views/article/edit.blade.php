@extends('layouts.app')

@section('content')
    {{ html()->modelForm($article, 'PATCH', route('articles.update', $article))->open() }}
    @include('article.form')
    <input type="submit" value="Сохранить" data-disable-with="Сохраняем">
    {{ html()->closeModelForm() }}
@endsection
