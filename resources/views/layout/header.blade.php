<header>
    <div class="header">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-sm-5 p-0">
                    <div class="contain-left-topbar d-flex">
                        <div class="box-icon-wrapper me-2">
                            <div class="box-icon">
                                <img src="/image/location.png" width="30" height="30" alt="">
                            </div>
                        </div>
                        <div class="box-info-wrapper">
                            <div class="box-info">
                                <p>HN: 11 Đường Ven Sông Lừ, Kim Liên, Đống Đa, HN</p>
                                <p>HCM: 62 Hoa Cau, Phường 7, Phú Nhuận, TP.HCM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contain-middle-topbar">
                        <div class="site-logo">
                            <a href=""><img src="/image/Marshall-Logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="contain-right-topbar d-flex justify-content-end">
                        <div class="box-icon-wrapper">
                            <div class="box-icon">
                                <img src="/image/phone-message.png" width="30" height="30" alt="">
                            </div>
                        </div>
                        <div class="box-info-wrapper">
                            <div class="box-info">
                                <p>0928.759.555</p>
                                <p>0394.678.121</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-7 p-0">
                    <div class="header-menu-left">
                        <div class="main-menu ">
                            <ul class="d-flex p-0 text-uppercase">
                                <li><a href=""><i class="fa-solid fa-store" style="color:white;"></i></a>
                                </li>
                                {{-- @dd($data) --}}
                                @foreach ($data_type as $item)
                                    <li><a href="{{ route('product.product_cate', ['id' => $item->id_type_main]) }}">{{ $item->name_type }}</a></li>
                                    {{-- {{ route('product.detail', ['id' => $item->id_product]) }} --}}
                                @endforeach
                                <li><a href="">Phụ kiện marshall</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="header-menu-right d-flex justify-content-end align-items-center">
                        <div class="search">
                            {{-- <div>
                                <form action="{{ route('product.search') }}" method="get">
                                    <input type="text" name="key" placeholder="tìm kiếm">
                                    <button type="submit"><a href=""><span><i
                                                    class="fa-solid fa-magnifying-glass"
                                                    style="color: white;"></i></span></a></button>
                                </form>
                            </div> --}}
                            <a href=""><span><i class="fa-solid fa-magnifying-glass"
                                        style="color: white;"></i></span></a>
                        </div>
                        <div class="user">
                            <div class="box d-flex align-items-center">
                                <div class="inside-box">
                                    <a href=""><span><i class="fa-solid fa-user"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="heart">
                            <div class="box d-flex align-items-center">
                                <div class="inside-box">
                                    <a href=""><i class="fa-regular fa-heart"></i></a>
                                </div>
                                <div class="count-heart">
                                    <p>0</p>
                                </div>
                            </div>
                        </div>
                        <div class="cart">
                            <div class="cart-posion">
                                <a href=""><span><i class="fa-solid fa-cart-shopping"
                                            style="color: white"></i></span></a>
                                <div class="count-cart">
                                    <p class="p-0 m-0">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="money">
                            100.000.000 ₫
                        </div>
                        <div class="country d-flex">
                            <div class="flag">
                                <img src="/image/vietnam.png" width="30" height="30" alt="">
                            </div>
                            <div style="color: white; margin-left:10px">
                                VIETNAM
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div>
    <form action="{{ route('product.search') }}" method="get">
        <input type="text" name="key" placeholder="tìm kiếm">
        <button type="submit"><a href=""><span><i class="fa-solid fa-magnifying-glass"
                        style="color: white;"></i></span></a></button>
    </form>
</div>
