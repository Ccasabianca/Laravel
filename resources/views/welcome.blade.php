<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')
@section('title', 'Accueil')
<title>{{ config('app.name', 'Laravel') }}</title>
@section('content')
<h2>Bienvenue sur le site de {{ $name }}</h2>
@endsection