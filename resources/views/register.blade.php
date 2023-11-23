@extends('layout')

@section('content')
    @include('header')
    <div class="container">
        <div class="login-form">

            <form class="bg-light" action="{{route('custom.register')}}" method="POST">
                @csrf
                <h2 style="text-align: center;">Đăng kí</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Họ và tên</label>
                    <input name="name" type="text" class="form-control" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                    <input name="password" type="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Xác nhận mật khẩu</label>
                    <input name="password_confirmation" type="password" class="form-control">
                </div>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Đăng kí</button>
                <div class="row">
                    <a href="{{ route('custom.login.form') }}" class="col-md-6"> Quay lại đăng nhập </a>

                </div>
            </form>
        </div>
    </div>
    @include('footer')
@endsection
