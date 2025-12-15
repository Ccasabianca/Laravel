<!-- resources/views/pages/article-details.blade.php -->
@extends('layouts.app')
@section('title', "Article $id")
@section('content')
<p>Article portant l'identifiant {{$id}}.
<p>
@endsection