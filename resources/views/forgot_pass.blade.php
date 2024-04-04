@extends('layout.layout')
@section('view-main')
    <div class="contain-user">
        <div class="container-fluid">
            <div class="row pt-5 pb-5">
                <div class="col-sm-12 p-0 d-flex justify-content-center">
                    <div class="forgot_pass">
                        <form action="{{ route('forgot_pass_') }}" method="post">
                            @csrf
                            <h3>QUÊN MẬT KHẨU</h3>
                            @if (session('message'))
                                <div class="alert alert-success" role="alert">
                                    <h5>{{ session('message') }}</h3>
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    <h5>{{ session('error') }}</h3>
                                </div>
                            @endif
                            <div class="mt-3">
                                <label for="email">Địa chỉ email</label> <span style="color:red">*</span>
                                <input type="text" name="email" value="" class="form-control">
                            </div>
                            <button type="submit" class="btn mt-3">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
