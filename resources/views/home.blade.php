@extends('layouts.app')

@section('title','Home - MyApp')

@section('content')

<div class="jumbotron text-centen bg-light py-5"> 
    <h1 class="display-4">Selamat Datang di My App </h1>
    <p class="lead">Aplikasi Laravel sederhana dengan Laravel Blade</p>
    <a href="{{ route('profile')}}" class="btn btn-primary btn-lg">Lihat Profil</a>
</div>
@endsection