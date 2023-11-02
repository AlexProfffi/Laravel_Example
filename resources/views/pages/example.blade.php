@extends('layouts.app')

@section('title', 'Example')


@section('scripts')
    <script type="module" src="{{ Vite::asset('resources/js/pages/example.js') }}"></script>
@endsection


@section('styles')
    <link href="{{ Vite::asset('resources/css/pages/example.scss') }}" rel="stylesheet">
@endsection


@section('content')
    <div class="bg"></div>
    <img src="{{ Vite::asset('resources/images/navbar-brand.png') }}" alt="">
@endsection
