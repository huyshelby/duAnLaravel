@extends('layout.layout')
@section('view-main')
    <div class="contain-search">
        <div class="container-fluid">
            <div class="row" style="margin: 0 55px">
                <div class="col-sm-12 p-0">
                    <div class="path-search">
                        <span style="color: #A5A5A5">Trang chủ</span> / <span style="font-weight:500">Kết quả tìm kiếm cho
                            "{{ request()->input('key') }}"</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="filter-search">

                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="result-search">
                        <div class="key-search">
                            <h2>Kết quả tìm kiếm cho "{{ request()->input('key') }}"</h2>
                        </div>
                        <div class="product-search">
                            <div class="row">
                                @foreach ($data as $item)
                                    <div class="col-sm-3 mb-4">
                                        <div class="main-product-search">
                                            <div class="product-search">
                                                <div class="ab-product-right">
                                                    <div class="ab-compare">
                                                        <span><i class="fa-solid fa-shuffle"></i></span>
                                                    </div>
                                                    <div class="ab-search">
                                                        <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                                    </div>
                                                    <div class="ab-heart">
                                                        <span><i class="fa-regular fa-heart"></i></span>
                                                    </div>
                                                </div>
                                                <div class="content-product-search">
                                                    <a href="{{ route('product.detail', ['id' => $item->id_product]) }}"><img
                                                            src="/image/{{ $item->img_main }}" alt=""></a>
                                                    <div class="text-product-search">
                                                        <p class="fw-bold mb-2">{{ $item->name }}</p>
                                                        <a href="" class="mb-2"
                                                            style="color: #A5A5A5">{{ $item->name_type_sub }}</a>
                                                        <p class="mb-2"><i class="fa-solid fa-check"></i> In stock</p>

                                                        @if ($item->sale)
                                                            <del
                                                                style="color: #A5A5A5">{{ number_format($item->price, 0) }}</del>
                                                            <span
                                                                class="fw-bold">{{ number_format($item->price - ($item->price * $item->sale) / 100), 0 }}
                                                                ₫</span> <br>
                                                        @else
                                                            <span class="fw-bold">{{ number_format($item->price, 0) }}
                                                                ₫</span> <br>
                                                        @endif

                                                        <div class="ab-product-search">
                                                            @if ($item->sale)
                                                                <div class="discount">
                                                                    <div>
                                                                        <span>-{{ $item->sale }}%</span>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if ($item->view > 0)
                                                                <div class="hot">
                                                                    <div>
                                                                        <span>HOT</span>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            <div class="new">
                                                                <div>
                                                                    <span>NEW</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="buy-now mt-2">
                                                    <a href=""><span>
                                                            <p class="m-0">Lựa Chọn Các Tùy Chọn</p> <i
                                                                class="fa-solid fa-cart-shopping"></i>
                                                        </span></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="pagination-search d-flex justify-content-center">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
