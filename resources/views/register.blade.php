@extends('layout')

@section('content')
@include('header')
    <div class="container">
        <div class="login-form">

            <form method="post" action="{{ route('register.post') }}" class="bg-light">
              @csrf
                <h2 style="text-align: center;">Đăng kí</h2>
                <div class="mb-3">
                  <label for="name" class="form-label">Họ và Tên</label>
                  <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter your Name">
                  @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your Email">
                  @if ($errors->has('email'))
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Mật khẩu</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Enter your Password">
                  @if ($errors->has('password'))
                      <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label for="re_pass" class="form-label">Xác nhận mật khẩu</label>
                  <input type="password" name="re_pass" class="form-control" id="re_pass" placeholder="Confirm your Password">
                  @if ($errors->has('re_pass'))
                      <span class="text-danger">{{ $errors->first('re_pass') }}</span>
                  @endif
                </div>

                <input class="btn-success" type="submit" name="submit" id="submit" value="Đăng ký">
                <div class="row">
                    <a href="{{url('login')}}" class="col-md-6"> Quay lại đăng nhập </a>

                </div>
              </form>
        </div>
    </div>
@include('footer')
@endsection
