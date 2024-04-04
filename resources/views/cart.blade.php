@extends('layout.layout')
@section('view-main')
    <div class="contain-cart">
        <div class="container-fluid p-0">
            <div class="row" style="margin: 0 55px">
                <div class="col-sm-12 p-0">
                    <div class="cart-step">
                        <div class="content-step">
                            <div>
                                <span>SHOPPING CART</span>
                            </div>
                            <div style="color: #B7B3B3">
                                <i class="fa-solid fa-arrow-right"></i>
                                <span>CHECKOUT</span>
                                <i class="fa-solid fa-arrow-right"></i>
                                <span>ORDER COMPLETE</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 mt-5">
                    <div class="product-cart">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                <h1>{{ session('success') }}</h1>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                <h1>{{ session('error') }}</h1>
                            </div>
                        @endif
                        @if (session('cart') != '')
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>SẢN PHẨM</th>
                                        <th>GIÁ</th>
                                        <th>SỐ LƯỢNG</th>
                                        <th>Lưu</th>
                                        <th>TẠM TÍNH</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <form action="{{ route('updateCart') }}" method="POST">
                                    @csrf
                                    <tbody>
                                        @php
                                            $tongtien = 0;
                                            $tongsoluong = 0;
                                            foreach ($cart as $c) {
                                                $id_sp = $c['id'];
                                                $soluong = $c['quantity'];
                                                $gia = \DB::table('products')
                                                    ->where('id_product', '=', $id_sp)
                                                    ->value('price');
                                                $sale = \DB::table('products')
                                                    ->where('id_product', '=', $id_sp)
                                                    ->value('sale');
                                                if ($sale != '') {
                                                    $gia = $gia - ($gia * $sale) / 100;
                                                }
                                                $thanhtien = $gia * $soluong;
                                                $tongtien += $thanhtien;
                                                $tongsoluong += $soluong;
                                                $thanhtien = number_format($thanhtien, 0, ',', '.');
                                                $gia = number_format($gia, 0, ',', '.');
                                                echo "<tr>
                                                <td><a href='delete_cart/{$id_sp}'>Xóa</a></td>
                                                <td><img src='/image/{$c['image']}' width='100'></td>
                                                <td>{$c['name']}</td>
                                                <td>{$gia}</td>
                                                <td><input type='number' value='{$soluong}' name='quantity[]' class='form-control'></td>
                                                <td><button type='submit' class='btn btn-primary'>Lưu</button></td>
                                                <td>{$thanhtien}</td>
                                                <td></td>
                                                <input type='hidden' name='id_sp[]' value='{$id_sp}'>
                                            </tr>";
                                            }
                                        @endphp
                                    </tbody>
                                </form>
                                <tfoot>
                                    <tr>
                                        <td colspan="8">
                                            <form action="{{ route('sale') }}" method="post">
                                                @csrf
                                                @if (session('success'))
                                                    <input type="text" disabled name="sale" placeholder="Mã ưu đãi">
                                                    <button type="submit" disabled class="btn btn-dark">Áp dụng</button>
                                                @else
                                                    <input type="text" name="sale" placeholder="Mã ưu đãi">
                                                    <button type="submit" class="btn btn-dark">Áp dụng</button>
                                                @endif
                                            </form>
                                        </td>
                                        {{-- <td colspan="1">
                                    <span><a href="">Cập Nhật Giỏ Hàng</a></span>
                                </td> --}}
                                    </tr>
                                </tfoot>
                            </table>
                        @else
                            <h1>Chưa có cc gì hết</h1>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4 mt-5">
                    <div class="total-cart">
                        <div class="item-tt-cart">
                            <h3 class="mb-4">Cart Totals</h3>
                            <div class="tt d-flex justify-content-between">
                                <p style="font-weight:500; font-size:15px">Tạm tính</p>
                                <p>{{ number_format($tongtien, 0, ',', '.') }} ₫</p>
                            </div>
                            <hr>
                            <div class="dely d-flex justify-content-between align-items-center">
                                <p style="font-weight:500; font-size:15px">Giao hàng</p>
                                <p style="max-width:50%">Tùy chọn giao hàng sẽ được cập nhật
                                    trong quá trình thanh toán.</p>
                            </div>
                            <hr>
                            <div class="total-price d-flex justify-content-between">
                                <h3 style="">Tổng</h3>
                                @php
                                    $discountedTotal = $tongtien;
                                    if (session('success')) {
                                        $discount = session('discount');
                                        $discountedTotal = $tongtien - ($tongtien * $discount) / 100;
                                        session()->put('discountedTotal', $discountedTotal);
                                    }
                                @endphp @if (session('success'))
                                    <h3>{{ number_format($discountedTotal, 0) }} ₫</h3>
                                @else
                                    <h3>{{ number_format($tongtien, 0, ',', '.') }} ₫</h3>
                                @endif
                            </div>
                            <div class="pay">
                                <a href="{{ route('check_out') }}">Tiến Hành Thanh Toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
