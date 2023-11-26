@extends('layout')

@section('content')
@include('header')
<main>
    <div class="container">
        @include('slider')
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
                                <div class="card-title"><a href="{{route('stories.show',$str->storyID)}}" >{{$str->storyName}}</a></div>
                                <div class="card-cat">{{ $str->category->categoryName}}    </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @include('sidebar')
            </div>
        </div>
    </section>
</main>
@include('footer')
@endsection
