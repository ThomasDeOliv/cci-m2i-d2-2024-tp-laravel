@extends('layout')

@php
    $viewTitle = "Acceuil";
    $content = '';
@endphp

@section('title')
    <title>{{ config('app.name') . ' - ' . $viewTitle }}</title>
@endsection

@section('content')
    <h1>{{ $viewTitle }}</h1>
    <p>{{ $content }}</p>
@endsection