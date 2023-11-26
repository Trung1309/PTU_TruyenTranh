@extends('layout')

@section('content')
    <div class="row">
        @include('Admin.navDashboad')
        <div class="col-md-10">
            <h1>Cập nhật người dùng tại đây</h1>
            <div class="content-dash">
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success col-md-6">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{route('user.update',$user->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Tên người dùng</strong>
                                    <input value="{{$user->name}}" type="text" name="name"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <strong>Email</strong>
                                    <input value="{{$user->email}}" type="text" name="email"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <strong>Quyền sử dụng</strong><br>
                                    <p>Quyền hiện tại: <span style="color: red">{{$user->role}}</span></p>
                                    <select name="role" class="form-select" aria-label="Default select example">
                                        <option selected value="{{$user->role}}">{{$user->role}}</option>
                                        <option value="user" >user</option>
                                        <option value="admin" >admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success mt-2">Xác nhận</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
