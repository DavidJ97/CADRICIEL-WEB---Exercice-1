@extends('layouts.master')

@section('title', $article['title'])

@section('content')
<div class="container mt-5">
    <h1>{{ $article['title'] }}</h1>
    <p class="lead">{{ $article['summary'] }}</p>
    
    @if(isset($article['image']))
    <div class="mb-4">
        <img src="{{ asset('images/' . $article['image']) }}" alt="{{ $article['title'] }}" class="img-fluid">
        <p class="text-muted">{{ $article['image_caption'] }}</p>
    </div>
    @endif

    @foreach($article['paragraphs'] as $paragraph)
        <p>{{ $paragraph }}</p>
    @endforeach

    <a href="{{ route('articles.list') }}" class="btn btn-primary">Retour à la liste</a>
</div>
@endsection