@extends('layout')

@section('content')
@include('header')
      <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="login-form">
            <form method="post" action="{{ route('login.post') }}" class="bg-light">
              @csrf
                <h2 style="text-align: center;">Đăng nhập vào PTU</h2>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input name="email"  type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your Email">
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
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
                </div>


                <input class="btn-success" type="submit" name="submit" id="submit" value="Đăng nhập">
                


                <div class="row">
                    <a href="{{url('register')}}" class="col-md-6"> Đăng kí </a>
                    <div class="col-md-6">
                        <a href="{{route('custom.forgot.form')}}" class="" style="text-align: right !important;"> Quên mật khẩu ?</a>
                    </div>
                </div>
                <a href="" class="btn btn-google btn-user btn-block " style="background: #3498db; color: #fff;"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i>  Facebook</a>
                <a href="{{ URL::to('/googleLogin') }}" class="btn btn-google btn-user btn-block " style="background: #e74c3c; color: #fff;"><i class="fa-brands fa-google" style="color: #fafafa;"></i>  Google</a>
                <a href="" class="btn btn-google btn-user btn-block " style="background: #000000; color: #fff;"><i class="fa-brands fa-github"></i>  Github</a>
              </form>
        </div>
      </div>
    @include('footer')
@endsection
