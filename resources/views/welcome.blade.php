<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')
@section('title', 'Accueil')
<title>{{ config('app.name', 'Laravel') }}</title>
@section('content')
<h2>Bienvenue sur le site de {{ $name }}</h2>
@forelse ($articles as $article)
@if ($loop->last)
@break
@endif
<h3>{{ $article['title'] }}</h3>
<p>{{ Str::limit($article['description'], 30) }}</p>
@empty
<p>Aucun article</p>
@endforelse
@endsection