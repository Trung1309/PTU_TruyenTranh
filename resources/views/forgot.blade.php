@extends('layout')

@section('content')
@include('header')
    <main>
        <div class="container">
            <div class="login-form">

                <form class="bg-light">
                    <h2 style="text-align: center;">Lấy lại mật khẩu</h2>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>

                    <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Xác Nhận</button>
                </form>
            </div>

        </div>
    </main>
    @include('footer')
@endsection
