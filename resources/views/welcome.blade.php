<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')
@section('title', 'Accueil')
<title>{{ config('app.name', 'Laravel') }}</title>
@section('content')
<h1>Bienvenue sur le site de {{ $name }}</h1>
@endsection