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
                @if (Session::has('success'))
                    <div class="alert alert-success col-md-6">
                        {{Session::get('success')}}
                    </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Hỉnh ảnh</th>
                            <th scope="col">Tên sách</th>
                            <th scope="col">Tác giả</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Tuỳ chỉnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($story as $str)
                            <tr>
                                <th scope="row">{{ $str->storyID }}</th>
                                <td>
                                    @if ($str->storyImage)
                                        <div class="avt-story">
                                            <img src="{{ asset('uploads/' . $str->storyImage) }}" alt="Story Image"
                                                width="50">
                                        </div>
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>{{ $str->storyName }}</td>d
                                <td>{{ $str->storyAuthor }}</td>
                                <td>{{ $str->storyDesc}}</td>
                                <td>
                                    <form action="{{route('stories.destroy',$str->storyID)}}" method="POST">
                                        <a href="{{route('stories.edit',$str->storyID)}}" class="btn btn-info">Sửa</a>
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
