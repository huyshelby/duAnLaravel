@extends('layout.layout')
@section('view-main')
    <div class="detail-product">
        <div class="container-fluid p-0">
            <div class="row" style="margin: 0 55px">
                <div class="col-sm-12 d-flex justify-content-between p-0">
                    <div class="path-detail">
                        <span style="color: #A5A5A5">Trang chủ / {{ $data->name_type }} / {{ $data->name_type_sub }} /</span>
                        <span>{{ $data->name }}</span>
                    </div>
                    <div class="back-product">
                        <a href=""><span><i class="fa-solid fa-table-cells-large" style="color: black"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="row" style="margin: 0 55px">
                <div class="col-sm-6 ps-0">
                    <div class="card-wrapper">
                        <div class="card"
                            style="
                            --bs-card-border-width: none;
                                --bs-card-bg: none
                            ">
                            <div class="product-imgs">
                                <div class="img-display">
                                    <div class="img-showcase d-flex justify-content-center">
                                        <img src="/image/{{ $data->img_main }}" alt="shoe image" style="max-width:70%">
                                        <div class="main-product-detail">
                                            <div class="product-detail">
                                                <div class="content-product-detail">
                                                    <div class="text-product-detail">
                                                        <div class="ab-product-detail">
                                                            <div class="discount">
                                                                <div>
                                                                    <span>-{{ $data->sale }}%</span>
                                                                </div>
                                                            </div>
                                                            <div class="hot">
                                                                <div>
                                                                    <span>HOT</span>
                                                                </div>
                                                            </div>
                                                            <div class="new">
                                                                <div>
                                                                    <span>NEW</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 p-0">
                    <div class="content-detail">
                        <div class="name-detail">
                            <h2>{{ $data->name }}</h2>
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
                            @if ($data->sale)
                                <h1><del style="color: #A5A5A5">{{ number_format($data->price, 0) }} ₫</del></h1>
                                <h1><span
                                        class="fw-bold">{{ number_format($data->price - ($data->price * $data->sale) / 100), 0 }}
                                        ₫</span></h1> <br>
                            @else
                                <h1><span class="fw-bold">{{ number_format($data->price, 0) }}
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

                    <div class="net">
                        <div class="d-flex">
                            <div class="compare me-4">
                                <a href="" style="color: black"><i class="fa-solid fa-shuffle"></i></a>
                                <span>Compare</span>
                            </div>
                            <div class="add-wish">
                                <a href="" style="color: black"><i class="fa-regular fa-heart"></i></a> <span>Add to
                                    wishlist</span>
                            </div>
                        </div>
                        <div class="share">
                            <span>Share: </span>
                            <span>
                                <a href=""><i class="fa-brands fa-square-facebook"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-square-pinterest"></i></a>
                                <a href=""><i class="fa-brands fa-instagram"></i></a>
                                <a href=""><i class="fa-brands fa-telegram"></i></a>
                            </span>
                        </div>
                    </div>
                    <div class="service">
                        <div class="contain-service">
                            <div class="shield">
                                <img src="/image/shield.png" width="25px" alt="">
                                <span>Bảo hành 1 năm</span>
                            </div>
                            <div class="return">
                                <img src="/image/return.png" width="25px" alt="">
                                <span>Đổi trả miễn phí trong 30 ngày</span>
                            </div>
                        </div>
                    </div>
                    <div class="payment-method">
                        <span>Payment Methods:</span>
                        <img src="/image/payments.png" style="max-width:100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="info-product">
        <div class="container-fluid p-0">
            <div class="row" style="margin: 0 55px">
                <div class="col-sm-7 ps-0">
                    <div class="info-left">
                        <div class="content">
                            <h3>Thông tin sản phẩm</h3>
                            <p>{{ $data->description }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 pe-0">
                    <div class="info-right">
                        <div class="contain-info">
                            <div class="info-sound">
                                <h3>Thông số kỹ thuật</h3>
                                <div class="title-info d-flex">
                                    <span class="pe-3"><img src="/image/processor.png" width="25px"
                                            alt=""></span>
                                    <h4 class="m-0">Thông số âm thanh</h4>
                                </div>
                                <div class="info-detail">
                                    @if ($data->sound)
                                        <div class="d-flex justify-content-between">
                                            <p class="">Âm thanh</p>
                                            <span> {{ $data->sound }}</span>
                                        </div>
                                    @endif

                                    @if ($data->brand)
                                        <div class="d-flex justify-content-between">
                                            <p class="">Thương hiệu</p>
                                            <span> {{ $data->brand }}</span>
                                        </div>
                                    @endif

                                    @if ($data->color)
                                        <div class="d-flex justify-content-between">
                                            <p class="">Màu sắc</p>
                                            <span> {{ $data->color }}</span>
                                        </div>
                                    @endif

                                    @if ($data->wat)
                                        <div class="d-flex justify-content-between">
                                            <p class="">Công suất</p>
                                            <span> {{ $data->wat }}</span>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <hr>
                            <div class="control">
                                <div class="title-info d-flex">
                                    <span class="pe-3"><img src="/image/control.png" width="25px"
                                            alt=""></span>
                                    <h4 class="m-0">
                                        Kiểm soát và kết nối</h4>
                                </div>
                                <div class="info-detail">
                                    @if ($data->connect_y)
                                        <div class="d-flex justify-content-between">
                                            <p class="">Kết nối có dây</p>
                                            <span> {{ $data->connect_y }}</span>
                                        </div>
                                    @endif

                                    @if ($data->connect_n)
                                        <div class="d-flex justify-content-between">
                                            <p class="">Kết nối không dây</p>
                                            <span> {{ $data->connect_n }}</span>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <hr>
                            <div class="size">
                                <div class="title-info d-flex">
                                    <span class="pe-3"><img src="/image/control.png" width="25px"
                                            alt=""></span>
                                    <h4 class="m-0">Kích thước</h4>
                                </div>
                                <div class="info-detail">
                                    @if ($data->size)
                                        <div class="d-flex justify-content-between">
                                            <p class="">Kích thước</p>
                                            <span> {{ $data->size }}</span>
                                        </div>
                                    @endif

                                    @if ($data->weight)
                                        <div class="d-flex justify-content-between">
                                            <p class="">Trọng lượng</p>
                                            <span> {{ $data->weight }}</span>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relate-product">
        <div class="container-fluid p-0">
            <div class="row" style="margin: 0 55px">
                <h3>Related Products</h3>
                <div class="col-sm-3">
                    <div class="main-product-relate">
                        <div class="product-relate">
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
                            <div class="content-product-relate">
                                <a href=""><img src="/image/MARSHALL ACTON 3-banner.webp" alt=""></a>
                                <div class="text-product-relate">
                                    <p class="fw-bold mb-2">Tên sản phẩm</p>
                                    <a href="" class="mb-2" style="color: #A5A5A5">Danh mục</a>
                                    <p class="mb-2"><i class="fa-solid fa-check"></i> In stock</p>

                                    <del style="color: #A5A5A5">300</del> <span class="fw-bold">200
                                        ₫</span> <br>

                                    <div class="ab-product-relate">
                                        <div class="discount">
                                            <div>
                                                <span>-10%</span>
                                            </div>
                                        </div>
                                        <div class="hot">
                                            <div>
                                                <span>HOT</span>
                                            </div>
                                        </div>
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
                <div class="col-sm-3">
                    <div class="main-product-relate">
                        <div class="product-relate">
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
                            <div class="content-product-relate">
                                <a href=""><img src="/image/MARSHALL ACTON 3-banner.webp" alt=""></a>
                                <div class="text-product-relate">
                                    <p class="fw-bold mb-2">Tên sản phẩm</p>
                                    <a href="" class="mb-2" style="color: #A5A5A5">Danh mục</a>
                                    <p class="mb-2"><i class="fa-solid fa-check"></i> In stock</p>

                                    <del style="color: #A5A5A5">300</del> <span class="fw-bold">200
                                        ₫</span> <br>

                                    <div class="ab-product-relate">
                                        <div class="discount">
                                            <div>
                                                <span>-10%</span>
                                            </div>
                                        </div>
                                        <div class="hot">
                                            <div>
                                                <span>HOT</span>
                                            </div>
                                        </div>
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
                <div class="col-sm-3">
                    <div class="main-product-relate">
                        <div class="product-relate">
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
                            <div class="content-product-relate">
                                <a href=""><img src="/image/MARSHALL ACTON 3-banner.webp" alt=""></a>
                                <div class="text-product-relate">
                                    <p class="fw-bold mb-2">Tên sản phẩm</p>
                                    <a href="" class="mb-2" style="color: #A5A5A5">Danh mục</a>
                                    <p class="mb-2"><i class="fa-solid fa-check"></i> In stock</p>

                                    <del style="color: #A5A5A5">300</del> <span class="fw-bold">200
                                        ₫</span> <br>

                                    <div class="ab-product-relate">
                                        <div class="discount">
                                            <div>
                                                <span>-10%</span>
                                            </div>
                                        </div>
                                        <div class="hot">
                                            <div>
                                                <span>HOT</span>
                                            </div>
                                        </div>
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
                <div class="col-sm-3">
                    <div class="main-product-relate">
                        <div class="product-relate">
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
                            <div class="content-product-relate">
                                <a href=""><img src="/image/MARSHALL ACTON 3-banner.webp" alt=""></a>
                                <div class="text-product-relate">
                                    <p class="fw-bold mb-2">Tên sản phẩm</p>
                                    <a href="" class="mb-2" style="color: #A5A5A5">Danh mục</a>
                                    <p class="mb-2"><i class="fa-solid fa-check"></i> In stock</p>

                                    <del style="color: #A5A5A5">300</del> <span class="fw-bold">200
                                        ₫</span> <br>

                                    <div class="ab-product-relate">
                                        <div class="discount">
                                            <div>
                                                <span>-10%</span>
                                            </div>
                                        </div>
                                        <div class="hot">
                                            <div>
                                                <span>HOT</span>
                                            </div>
                                        </div>
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
            </div>
        </div>
    </div>
@endsection
