<div class="dash-left col-md-2">
    <h2>ADMIN <strong>PTU</strong></h2>
    <ul>
        <li><a href="{{route('stories.index')}}">Tổng quan</a></li>
        <li><a href="{{route('stories.create')}}">Thêm truyện</a></li>
        <li><a href="{{route('category.index')}}">Thêm thể loại</a></li>
        <li><a href="{{route('user.index')}}">Quản lí người dùng</a></li>
        <li><a href="{{route('home')}}">Trang chủ</a></li>
        <form action="{{ route('custom.logout') }}" method="post">
            @csrf
            <li>
                <button type="submit" style="border: none;background: none;color: white">Đăng xuất</button>
            </li>

        </form>
    </ul>

</div>
