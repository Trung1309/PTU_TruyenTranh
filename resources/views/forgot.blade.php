@extends('layout')
@section('content')
@include('header')
    <main>
        <div class="container">
            <div class="login-form">

                <form class="bg-light" action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <h2 style="text-align: center;">Lấy lại mật khẩu</h2>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->has('email'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Xác Nhận</button>
                </form>
            </div>

        </div>
    </main>
@include('footer')
@endsection
