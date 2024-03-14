@extends('layout.layout')
@section('view-main')
    {{-- hot products --}}
    @include('.product-hot')

    {{-- speaker at home --}}
    @include('speaker-home')

    {{-- cate marshall --}}
    @include('cate')
    
@endsection