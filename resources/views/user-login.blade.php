@extends('layout.layout')
@section('view-main')
    <div class="contain-user">
        <div class="container-fluid">
            <div class="row pt-5 pb-5">
                <div class="col-sm-6 p-0 d-flex justify-content-end">
                    <div class="register">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <h3>ĐĂNG KÝ</h3>
                            @if (session('message'))
                                <div class="alert alert-danger" role="alert">
                                    <h5>{{ session('message') }}</h3>
                                </div>
                            @endif
                            <div class="mt-3">
                                <label for="email">Địa chỉ email</label> <span style="color:red">*</span>
                                <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                                <b class="text-danger"> @error('email')
                                        {{ $message }}
                                    @enderror </b>
                            </div>
                            <div class="mt-3">
                                <label for="pass">Mật khẩu</label> <span style="color: red">*</span> <br>
                                <input type="password" class="form-control" name="pass" value="{{ old('pass') }}">
                                <b class="text-danger"> @error('pass')
                                        {{ $message }}
                                    @enderror </b>
                            </div>
                            <div class="mt-3">
                                <label for="pass2">Nhập lại mật khẩu</label> <span style="color: red">*</span> <br>
                                <input type="password" class="form-control" name="pass2" value="{{ old('pass2') }}">
                                <b class="text-danger"> @error('pass2')
                                        {{ $message }}
                                    @enderror </b>
                            </div>
                            <div class="text mt-3">
                                Thông tin cá nhân của bạn sẽ được sử dụng để tăng cường trải nghiệm sử dụng website,
                                để quản lý truy cập vào tài khoản của bạn, và cho các mục đích cụ thể khác được mô tả trong
                                chính sách riêng tư của chúng tôi.
                            </div>
                            <button type="submit" class="btn mt-3">Đăng ký</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 p-0 d-flex justify-content-start">
                    <div class="login">
                        <form action="{{ route('login') }}" method="get">
                            <h3>LOGIN</h3>
                            <div class="text">
                                Registering for this site allows you to access your order status and history.
                                Just fill in the fields below, and we'll get a new account set up for you in no time.
                                We will only ask you for information necessary to make the purchase process faster and
                                easier.
                            </div>
                            <div>
                                <button type="submit" class="btn mt-3">Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
