<!-- resources/views/pages/article-details.blade.php -->
@extends('layouts.app')
@section('title', "Article " . $article->id)
@section('content')
<x-article :id="$article->id" :title="$article->title" :description="$article->description" />
@endsection