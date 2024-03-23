@extends('layout.layout')
@section('view-main')
    <div class="detail-product">
        <div class="container-fluid p-0">
            <div class="row" style="margin: 0 55px">
                <div class="col-sm-12 d-flex justify-content-between p-0">
                    <div class="path-detail">
                        Trang chủ / Tai nghe marshall / In-ear / {{ $detail_product->name }}
                    </div>
                    <div class="back-product">
                        <a href=""><span><i class="fa-solid fa-table-cells-large" style="color: black"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="row" style="margin: 0 55px">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6 p-0">
                    <div class="content-detail">
                        <div class="name-detail">
                            <h2>{{ $detail_product->name }}</h2>
                        </div>
                        <div class="text-detail">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="text-left">
                                        <img src="/image/promotions.png" width="30" alt="">
                                        <h4 class="m-0" style="color: black">Trải nghiệm sản phẩm tại Store HN & HCM</h4>
                                        <p class="mt-3">Hà Nội: 11 Đường Ven Sông Lừ, Kim Liên, Đống Đa, HN</p>
                                        <p>Hồ Chí Minh: 62 Hoa Cau, Phường 7, Phú Nhuận, TP.HCM</p>
                                        <p class="mb-3">HN: 0928 759 555 / HCM: 0394 678 121</p>

                                        <p><b>Lưu ý:</b> Đây là Website duy nhất và không có bất kỳ <b>"CHƯƠNG TRÌNH"</b>
                                            giảm giá 70-75%
                                            nào
                                            đã
                                            & đang được diễn rạ</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex justify-content-center align-items-center">
                                    <div class="text-right">
                                        <b>Hỗ trợ thu CŨ đổi MỚI</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price-detail">
                        <div class="price d-flex">
                            @if ($detail_product->sale)
                                <h1><del style="color: #A5A5A5">{{ number_format($detail_product->price, 0) }} ₫</del></h1>
                                <h1><span
                                        class="fw-bold">{{ number_format($detail_product->price - ($detail_product->price * $detail_product->sale) / 100), 0 }}
                                        ₫</span></h1> <br>
                            @else
                                <h1><span class="fw-bold">{{ number_format($detail_product->price, 0) }}
                                        ₫</span></h1> <br>
                            @endif
                        </div>
                    </div>
                    <div class="cart-detail">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="quantity-buy">
                                    <div class="quantity-control">
                                        <button class="decrease">-</button>
                                        <input type="number" min="1" max="99" value="1"
                                            class="quantity-input">
                                        <button class="increase">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 p-0">
                                <div class="add-cart">
                                    <p>Thêm Vào Giỏ Hàng</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="buy-now">
                                    <p>Buy Now</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
