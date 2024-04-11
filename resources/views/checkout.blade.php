@extends('layout.layout')
@section('view-main')
    <div class="contain-checkout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div class="cart-step">
                        <div class="content-step">
                            <div>
                                <span style="color: #B7B3B3">SHOPPING CART</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                            <span>CHECKOUT</span>
                            <div style="color: #B7B3B3">
                                <i class="fa-solid fa-arrow-right"></i>
                                <span>ORDER COMPLETE</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <h1>Billing Details</h1>
                    <form action="" method="post">
                        <input type="text" id="name" name="name" required placeholder="Họ và tên" value="">
                        <input type="text" id="email" name="email" placeholder="Email" required value="">
                        <input type="text" id="phone" name="phone" required placeholder="Số điện thoại"
                            value="">
                        <div class="delivery-address">
                            <div class="radio-content">
                                <input type="radio" checked>
                                <label for="">Giao hàng tận nơi</label>
                            </div>

                            <div class="form-address">

                                <input type="text" id="city-check" name="address" placeholder="Địa chỉ" required
                                    value="">
                            </div>
                        </div>
                        <div class="shipping-method">
                            <h2>Phương thức vận chuyển</h2>
                            <label for="">
                                <div class="radio-shipping-method">
                                    <input type="radio" checked>
                                    <span>Giao hàng tận nơi</span>
                                </div>
                                <div class="price-shipping-method">
                                    <span>40.000</span>
                                </div>
                            </label>
                        </div>
                        <div class="payment-methods">
                            <h2>Phương thức thanh toán</h2>
                            <div class="box-payment-methods">
                                <label for="" class="form-payment-methods">
                                    <div class="raido-payment-methods">
                                        <input type="radio" name="payment-methods" checked>
                                    </div>
                                    <div class="content-payment-methods">
                                        <img src="/image/cod.svg" alt="">
                                        <span>Thanh toán khi giao hàng (COD)</span>
                                    </div>
                                </label>
                                <div class="payment-method-notes">
                                    <span>Quý khách có thể thanh toán khi đã nhận được sản phẩm mình đã
                                        đặt.</span>
                                </div>
                            </div>
                            <div class="box-payment-methods">
                                <label for="" class="form-payment-methods">
                                    <div class="raido-payment-methods">
                                        <input type="radio" name="payment-methods">
                                    </div>
                                    <div class="content-payment-methods">
                                        <img src="/image/other.svg" alt="">
                                        <span>Chuyển khoản qua ngân hàng</span>
                                    </div>
                                </label>
                                <div class="payment-method-notes">
                                    <span>Quý khách vui lòng ghi nội dung chuyển khoản như sau: Họ và tên + Mã
                                        số đơn hàng.<br>
                                        + MB BANK.<br>
                                        Tên chủ TK: LÂM GIA HUY<br>
                                        STK: 0339332612<br>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" id="pay" name="payment" value="Hoàn tất đơn hàng">
                    </form>
                </div>
                <div class="col-sm-5">
                    <h1>Your Order</h1>
                    <div class="d-flex justify-content-between">
                        <h5>Sản phẩm</h5>
                        <h5>Tạm tính</h5>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <div>
                            <span>img</span>
                            <span>name</span>
                            <span>quantity</span>
                        </div>
                        <div>
                            <span>5.000.000 đ</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
