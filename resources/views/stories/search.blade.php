<ul>
    @foreach($story as $str)
        <li>{{ $str->storyName }}</li>
        <!-- Hiển thị các thông tin khác của story -->
    @endforeach
</ul>
