@extends('layout')

@php
    $viewTitle = "Contact";
    $content = '';
@endphp

@section('styles')
    <link type="text/css" href="{{ mix('assets/css/app.css') }}" rel="stylesheet"/>
@endsection

@section('title')
    <title>{{ config('app.name') . ' - ' . $viewTitle }}</title>
@endsection

@section('content')
    <h1>{{ $viewTitle }}</h1>
    <p>{{ $content }}</p>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ mix('assets/js/app.js') }}"></script>
@endsection