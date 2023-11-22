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
                <form action="{{route('stories.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Tên Sách <span style="color: red">*</span></strong>
                                <input type="text" name="storyName" class="form-control" placeholder="Nhập tên sách">
                            </div>

                            <div class="form-group">
                                <strong>Tác giả <span style="color: red">*</span></strong>
                                <input type="text" name="storyAuthor" class="form-control" placeholder="Nhập tác giả">
                            </div>
                            <div class="form-group">
                                <strong>Mô tả <span style="color: red">*</span></strong>
                                <input type="text" name="storyDesc" class="form-control" placeholder="Nhập mô tả">
                            </div>
                            <div class="form-group">
                                <strong>Nội dung <span style="color: red">*</span></strong>
                                <textarea class="form-control" name="storyContent" id="" cols="30" rows="10" placeholder="Nhập nội dung"></textarea>

                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Thể loại <span style="color: red">*</span></strong><br>
                                <select name="categoryID" class="form-select" aria-label="Default select example">
                                    <option selected disabled>Chọn thể loại</option>
                                    @foreach ($category as $cat)
                                        <option value="{{ $cat->categoryID }}">{{ $cat->categoryName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <strong>Hình ảnh </strong>
                                <input type="file" name="storyImage"  id="image-input" class="form-control" accept="image/*"  placeholder="tải lên">
                                <div id="preview-container"  >
                                    <img id="image-preview" class="image-preview">
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
