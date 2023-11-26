@extends('layout')
@section('content')
    @include('header')
    <div class="container">
        <div class="main-detail">
            <div class="detail-avt">
                <img src="{{ asset('uploads/' . $story->storyImage) }}" alt="">
            </div>
            <div class="detail-title">
                {{$story->storyName}}
            </div>
            <div class="detail-info bg-light">
                <div class="detail-author">{{$story->storyAuthor}}</div>
                <div class="detail-view">
                    {{$story->views}} lượt xem
                </div>
            </div>
            <div class="detail-content">
                <h2>Nội dung</h2>
                <p>{{$story->storyDesc}}</p>

            </div>
        </div>
    </div>
    @include('footer')
@endsection
