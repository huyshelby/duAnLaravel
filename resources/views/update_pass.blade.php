@extends('layout.layout')
@section('view-main')
    <div class="contain-user">
        <div class="container-fluid">
            <div class="row pt-5 pb-5">
                <div class="col-sm-12 p-0 d-flex justify-content-center">
                    <div class="forgot_pass">
                        @php
                            $email = $_GET['email'];
                            $token = $_GET['token'];
                            
                        @endphp
                        <form action="{{ route('update_pass_act') }}" method="post">
                            @csrf
                            <h3>LẤY LẠI MẬT KHẨU</h3>
                            {{-- @if (session('message'))
                                <div class="alert alert-success" role="alert">
                                    <h5>{{ session('message') }}</h3>
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    <h5>{{ session('error') }}</h3>
                                </div>
                            @endif --}}
                            <input type="hidden" name="email" value="{{ $email }}">
                            <input type="hidden" name="token" value="{{ $token }}">
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
                            <button type="submit" class="btn mt-3">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
