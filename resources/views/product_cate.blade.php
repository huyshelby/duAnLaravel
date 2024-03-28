@extends('layout.layout')
@section('view-main')
    <div class="product-cate">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="path-cate">
                        <span style="color: #A5A5A5">Trang chủ /</span>
                        {{-- @dd($data) --}}
                        <span>{{ $data[0]->name_type }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
