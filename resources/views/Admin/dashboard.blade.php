@extends('layout')

@section('content')
<div class="row">
    @include('Admin.navDashboad')
    <div class="col-md-10">
        <h1>Danh sách truyện tranh</h1>

        <div class="content-dash">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Tên sách</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Nội dung</th>
                        <th scope="col">Tuỳ chỉnh</th>
                      </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <form action="" method="POST">
                                        <a href="" class="btn btn-info">Sửa</a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa cuốn sách không?')">Xoá</button>
                                    </form>
                                </td>
                            </tr>
                    </tbody>
                  </table>
        </div>

    </div>
</div>
@endsection
