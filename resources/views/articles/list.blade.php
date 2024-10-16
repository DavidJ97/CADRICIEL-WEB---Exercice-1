@extends('layouts.master')

@section('title', 'Liste des Articles')

@section('content')
    <h1>Liste des Articles</h1>
    <ul>
    @foreach($articles as $article)
        <li><a href="{{ route('article.show', $article['id']) }}">{{ $article['title'] }}</a></li>
    @endforeach
    </ul>
@endsection