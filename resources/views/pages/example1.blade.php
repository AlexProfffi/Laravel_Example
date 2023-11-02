@extends('layouts.app')

@section('title', 'Example1')


@section('scripts')
    <script type="module" src="{{ Vite::asset('resources/js/pages/example1.js') }}"></script>
@endsection


@section('content')
    <div>example 1</div>
@endsection
