@extends('layout')
@section('content')
@include('header')
    <main>
        <div class="container">
            <div class="login-form">

                <form class="bg-light" method="POST" action="{{ route('password.update') }}">

                    @csrf
                    <h2 style="text-align: center;">Nhập lại mật khẩu mới</h2>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if ($errors->has('password'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input name="email" type="email" value="{{ $email }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password">Mật khẩu</label>
                        <input name="password"  type="password"  class="form-control"  required >
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation">Xác nhận mật khẩu</label>
                        <input name="password_confirmation" type="password" class="form-control"   required >
                    </div>
                    <button class="btn btn-primary" type="submit">Reset Password</button>
                </form>
            </div>

        </div>
    </main>
@include('footer')
@endsection
