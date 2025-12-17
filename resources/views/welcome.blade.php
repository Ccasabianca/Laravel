<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')
@section('title', 'Accueil')
<title>{{ config('app.name', 'Laravel') }}</title>
@section('content')
<h2>Bienvenue sur le site de {{ $name }}</h2>
@forelse ($articles as $article)
<x-article :id="$article->id" :title="$article->title" :description="Str::limit($article->description, 100)" />
@empty
<p>Aucun article</p>
@endforelse
@endsection