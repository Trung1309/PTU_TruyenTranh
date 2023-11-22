@extends('layout')

@section('content')
<div class="row">
    @include('Admin.navDashboad')
    <div class="col-md-10">
        <h1>Thêm truyện tranh tại đây</h1>
        <div class="content-dash">
            <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success col-md-6">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form action="{{route('stories.update',$story->storyID)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Tên Sách</strong>
                                <input value="{{$story->storyName}}" type="text" name="storyName" class="form-control" placeholder="Nhập tên sách">
                            </div>

                            <div class="form-group">
                                <strong>Tác giả</strong>
                                <input  value="{{$story->storyAuthor}}" type="text" name="storyAuthor" class="form-control" placeholder="Nhập mô tả">
                            </div>
                            <div class="form-group">
                                <strong>Mô tả</strong>
                                <input  value="{{$story->storyDesc}}" type="text" name="storyDesc" class="form-control" placeholder="Nhập tên tác giả">
                            </div>
                            <div class="form-group">
                                <strong>Nội dung</strong>
                                <textarea value=""  class="form-control" name="storyContent" id="" cols="30" rows="10" placeholder="Nhập nội dung">{{$story->storyContent}}</textarea>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Thể loại</strong><br>
                                <p>Thể loại hiện tại: <span style="color: red">{{$story->category->categoryName}}</span></p>
                                <select name="categoryID" class="form-select" aria-label="Default select example">
                                    <option selected value="{{$story->categoryID}}">{{$story->category->categoryName}}</option>
                                    @foreach ($category as $cat)
                                        <option value="{{ $cat->categoryID }}" >{{ $cat->categoryName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <strong>Hình ảnh</strong>
                                <input type="file" name="storyImage"  id="image-input" class="form-control" accept="image/*"  placeholder="tải lên">
                                <div class="image-display" style="display: flex">
                                    <div id="preview-container"  >
                                        <img id="image-preview" class="image-preview" >
                                        <p style="text-align: center">Ảnh mới</p>
                                    </div>

                                    <div  style="width: 200px; height: 300px; display: block; margin: 0px auto" >
                                        <img  style="width: 100%;height: 100%;object-fit: cover" src="{{ asset('uploads/' . $story->storyImage) }}" >
                                        <p style="text-align: center">Ảnh cũ</p>
                                    </div>
                                </div>
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
