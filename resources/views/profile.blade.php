@extends('layout.layout')
@section('view-main')
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            <h1>{{ session('message') }}</h1>
        </div>
    @endif
@endsection
