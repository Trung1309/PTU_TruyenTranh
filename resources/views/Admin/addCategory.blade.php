@extends('layout')

@section('content')
<div class="row">
    @include('Admin.navDashboad')
    <div class="col-md-10">
        <h1>Thêm thể loại truyện tranh tại đây</h1>
        <div class="content-dash">
            <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success col-md-6">
                        {{Session::get('success')}}
                    </div>
                @endif

                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{Session::get('error')}}
                    </div>
                @endif
                <form action="{{route('category.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mã thể loại</strong>
                                <input type="text" name="categoryID" class="form-control" placeholder="Nhập mã thể loại">
                            </div>
                            <div class="form-group">
                                <strong>Tên thể loại</strong>
                                <input type="text" name="categoryName" class="form-control" placeholder="Nhập tên thể loại">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mt-2">Xác nhận</button>
                </form>
            </div>
        </div>
        <div class="table">

            <div class="content-dash">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Mã Thể loại</th>
                            <th scope="col">Tên thể loại</th>
                            <th scope="col">Tuỳ chọn</th>
                          </tr>
                        </thead>
                        {{-- @foreach ( $books as $bk )
                            <tr>
                                <th scope="row">{{++$i}}</th>
                                <td>{{$bk->name}}</td>
                                <td>{{$bk->author}}</td>
                                <td>{{$bk->description}}</td>
                                <td>{{$bk->content}}</td>
                                <td>
                                    <form action="{{route('books.destroy',$bk->id)}}" method="POST">
                                        <a href="{{route('books.edit',$bk->id)}}" class="btn btn-info">Sửa</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa cuốn sách {{$bk->name}} không?')">Xoá</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach --}}
                        <tbody>
                            @foreach ( $category as $cat )
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$cat->categoryID}}</td>
                                    <td>{{$cat->categoryName}}</td>
                                    <td>
                                        <form action="{{route('category.destroy',$cat->id)}}" method="POST">
                                            <a href="{{route('category.edit',$cat->id)}}" class="btn btn-info">Sửa</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa cuốn sách không?')">Xoá</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
            </div>

        </div>
    </div>

</div>
@endsection
