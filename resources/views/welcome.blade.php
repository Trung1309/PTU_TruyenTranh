@extends('layout')

@section('content')
@include('header')
<main>
    <div class="container">
        <div class="slider">
            <div class="slider-item">
                <img class="slider-avt" src="https://stbhatay.com.vn/wp-content/uploads/2023/02/sv24.webp" alt="">
                <div class="slider-content">
                    <a href="#" class="slider-title">in chàoin chàoin chàoin chàoin chàoX</a>
                </div>
            </div>
            <div class="slider-item">
                <img class="slider-avt" src="https://stbhatay.com.vn/wp-content/uploads/2023/02/sv24.webp" alt="">
                <div class="slider-content">
                    <a href="#" class="slider-title">Xin chào</a>
                </div>
            </div>
            <div class="slider-item">
                <img class="slider-avt" src="https://stbhatay.com.vn/wp-content/uploads/2023/02/sv24.webp" alt="">
                <div class="slider-content">
                    <a href="#" class="slider-title">Xin chào</a>
                </div>
            </div>
            <div class="slider-item">
                <img class="slider-avt" src="https://stbhatay.com.vn/wp-content/uploads/2023/02/sv24.webp" alt="">
                <div class="slider-content">
                    <a href="#" class="slider-title">Xin chào</a>
                </div>
            </div>
            <div class="slider-item">
                <img class="slider-avt" src="https://stbhatay.com.vn/wp-content/uploads/2023/02/sv24.webp" alt="">
                <div class="slider-content">
                    <a href="#" class="slider-title">Xin chào</a>
                </div>
            </div>
            <div class="slider-item">
                <img class="slider-avt" src="https://stbhatay.com.vn/wp-content/uploads/2023/02/sv24.webp" alt="">
                <div class="slider-content">
                    <a href="#" class="slider-title">Xin chào</a>
                </div>
            </div>
            <div class="slider-item">
                <img class="slider-avt" src="https://stbhatay.com.vn/wp-content/uploads/2023/02/sv24.webp" alt="">
                <div class="slider-content">
                    <a href="#" class="slider-title">Xin chào</a>
                </div>
            </div>
            <div class="slider-item">
                <img class="slider-avt" src="https://stbhatay.com.vn/wp-content/uploads/2023/02/sv24.webp" alt="">
                <div class="slider-content">
                    <a href="#" class="slider-title">Xin chào</a>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="content row">
                <div class="content-right col-md-8">
                    <div class="part-title"> Truyện mới nhất</div>
                    <div class="cards ">
                        @foreach ($story as $str)
                        <div class="card-item">
                            <div class="card-avt">
                                <img src="{{ asset('uploads/' . $str->storyImage) }}" alt="">
                            </div>
                            <div class="card-content">
                                <div class="card-title"><a href="#" >{{$str->storyName}}</a></div>
                                <div class="card-cat">{{ $str->category->categoryName}}    </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="content-left col-md-4">
                    <div class="sidebar">
                        <div class="part-title">Thể Loại</div>
                        <ul>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('footer')
@endsection
