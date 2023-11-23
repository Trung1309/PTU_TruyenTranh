@extends('layout')

@section('content')
@include('header')
      <div class="container">

        <div class="login-form">
            <form class="bg-light" action="{{ route('custom.login') }}" method="POST">
                @csrf
                <h2 style="text-align: center;">Đăng nhập vào PTU</h2>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">

                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
                </div>


                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Đăng nhập</button>


                <div class="row">
                    <a href="{{route('custom.register.form')}}" class="col-md-6"> Đăng kí </a>
                    <div class="col-md-6">
                        <a href="{{route('custom.forgot.form')}}" class="" style="text-align: right !important;"> Quên mật khẩu ?</a>
                    </div>
                </div>
                <a href="{{route('custom.google')}}" class="btn btn-google btn-user btn-block " style="background: #e74c3c; color: #fff;"><i class="fa-brands fa-google" style="color: #fafafa;"></i>  Google</a>
                <a href="{{route('custom.facebook')}}" class="btn btn-google btn-user btn-block " style="background: #3498db; color: #fff;"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i>  Facebook</a>
              </form>
        </div>
      </div>
    @include('footer')
@endsection
