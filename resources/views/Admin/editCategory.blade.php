@extends('layout')

@section('content')
    <div class="row">
        @include('Admin.navDashboad')
        <div class="col-md-10">
            <h1>Cập nhật thế loại tại đây</h1>
            <div class="content-dash">
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success col-md-6">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('category.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Mã thể loại</strong>
                                    <input value="{{ $category->categoryID }}" type="text" name="categoryID"
                                        class="form-control" placeholder="Nhập mã thể loại">
                                </div>
                                <div class="form-group">
                                    <strong>Tên thể loại</strong>
                                    <input value="{{ $category->categoryName }}" type="text" name="categoryName"
                                        class="form-control" placeholder="Nhập tên thể loại">
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
