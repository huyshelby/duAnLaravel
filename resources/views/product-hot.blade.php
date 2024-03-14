<div class="wrapper">
    <div class="contain-web">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="padding: 0 55px">
                    <div class="banner">
                        <div class="img-banner">
                            <div class="text-banner">
                                <h1 class="m-0">ALL SPEAKERS</h1>
                                <p class="m-0">THƯỞNG THỨC ÂM THANH MARSHALL TẠI NHÀ</p>
                                <p class="m-0">VÀ TRÊN ĐƯỜNG PHỐ</p>
                                <a href="" style="color: white"><span>Shop Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contain-product-hot">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-sm-12 p-0">
                <div class="header-product-hot">
                    <h1 class="m-0">SẢN PHẨM HOT</h1>
                    <a href=""><span>Xem Tất Cả <i class="fa-solid fa-angle-right"></i></span></a>
                </div>
            </div>
        </div>
        <div class="row" style="margin:0 55px">
            @foreach ($product_hot as $item)
                <div class="col-sm-3">
                    <div class="main-product-hot">
                        <div class="product-hot">
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
                            <div class="content-product-hot">
                                <img src="image/{{ $item->img_main }}" alt="">
                                <div class="text-product-hot">
                                    <p class="fw-bold mb-2">{{ $item->name }}</p>
                                    <a href="" class="mb-2"
                                        style="color: #A5A5A5">{{ $item->name_type }}</a>
                                    <p class="mb-2"><i class="fa-solid fa-check"></i> In stock</p>
                                    @if ($item->sale)
                                        <del style="color: #A5A5A5">{{ number_format($item->price,0) }}</del> <span
                                            class="fw-bold">{{ number_format($item->price - ($item->price * $item->sale) / 100), 0 }}
                                            ₫</span> <br>
                                    @else
                                        <span class="fw-bold">{{ number_format($item->price, 0) }}
                                            ₫</span> <br>
                                    @endif

                                    <div class="ab-product-hot">
                                        <div class="discount">
                                            <div>
                                                <span>-{{ $item->sale }}%</span>
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
            @endforeach
            {{-- <div class="col-sm-3">
                <div class="main-product-hot">
                    <div class="product-hot">
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
                        <div class="content-product-hot">
                            <img src="image/major 4.png" alt="">
                            <div class="text-product-hot">
                                <p class="fw-bold mb-2">MARSHALL MAJOR 4</p>
                                <a href="" class="mb-2" style="color: #A5A5A5">TAI NGHE MARSHALL,
                                    ON-EAR</a>
                                <p class="mb-2"><i class="fa-solid fa-check"></i> In stock</p>
                                <del style="color: #A5A5A5">3.690.000 ₫</del> <span class="fw-bold">2.990.000
                                    ₫</span> <br>
                                <div class="ab-product-hot">
                                    <div class="discount">
                                        <div>
                                            <span>-19%</span>
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
                <div class="main-product-hot">
                    <div class="product-hot">
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
                        <div class="content-product-hot">
                            <img src="image/major 4.png" alt="">
                            <div class="text-product-hot">
                                <p class="fw-bold mb-2">MARSHALL MAJOR 4</p>
                                <a href="" class="mb-2" style="color: #A5A5A5">TAI NGHE MARSHALL,
                                    ON-EAR</a>
                                <p class="mb-2"><i class="fa-solid fa-check"></i> In stock</p>
                                <del style="color: #A5A5A5">3.690.000 ₫</del> <span class="fw-bold">2.990.000
                                    ₫</span> <br>
                                <div class="ab-product-hot">
                                    <div class="discount">
                                        <div>
                                            <span>-19%</span>
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
                <div class="main-product-hot">
                    <div class="product-hot">
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
                        <div class="content-product-hot">
                            <img src="image/major 4.png" alt="">
                            <div class="text-product-hot">
                                <p class="fw-bold mb-2">MARSHALL MAJOR 4</p>
                                <a href="" class="mb-2" style="color: #A5A5A5">TAI NGHE MARSHALL,
                                    ON-EAR</a>
                                <p class="mb-2"><i class="fa-solid fa-check"></i> In stock</p>
                                <del style="color: #A5A5A5">3.690.000 ₫</del> <span class="fw-bold">2.990.000
                                    ₫</span> <br>
                                <div class="ab-product-hot">
                                    <div class="discount">
                                        <div>
                                            <span>-19%</span>
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
            </div> --}}
        </div>
    </div>
</div>
<div class="wrapper-speaker-mobile">
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-sm-6 ps-0 pe-0" style="padding-bottom: 80px">
                <img src="image/banner-speaker-mobile.png" alt="">
            </div>
            <div class="col-sm-6 p-0">
                <div class="content-speaker-right">
                    <h1>LOA DI ĐỘNG</h1>
                    <p>Mang âm thanh đặc trưng của Marshall đi khắp mọi nơi bằng loa di động và
                        giữ cho âm nhạc của bạn tiếp tục hàng giờ liền.</p>
                    <a href=""><span>Xem thêm <i class="fa-solid fa-angle-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
