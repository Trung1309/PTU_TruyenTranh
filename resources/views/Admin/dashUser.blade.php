@extends('layout')

@section('content')
    <div class="row">
        @include('Admin.navDashboad')
        <div class="col-md-10">
            <h1>Danh sách người dùng</h1>
            <div class="content-dash">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                @if (Session::has('success'))
                    <div class="alert alert-success col-md-6">
                        {{Session::get('success')}}
                    </div>
                @endif

                <table class="table" style="margin-top: 20px">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Tên người dùng</th>
                            <th scope="col">Email</th>
                            <th scope="col">Quyền</th>
                            <th scope="col">Tuỳ chỉnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $u)
                            <tr>
                                <th scope="row">{{$u->id}}</th>
                                <td>{{$u->name}}</td>
                                <td>{{$u->email}}</td>
                                <td>{{$u->role}}</td>
                                <td>
                                    <form action="{{route('user.destroy',$u->id)}}" method="POST">
                                        <a href="{{route('user.edit',$u->id)}}" class="btn btn-info">Sửa</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Bạn có chắc chắn muốn xóa cuốn sách không?')">Xoá</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
