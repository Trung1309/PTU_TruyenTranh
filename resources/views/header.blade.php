<header class="bg-light">
    <div class="container">
        <div class="header-top">
            <div class="user">
                @auth
                    <div class="user-name"> {{ Auth::user()->name }}</div>
                    <div class="user-avt">
                        @if(Auth::user()->avatar)
                        <img src="{{ asset(Auth::user()->avatar) }}" alt="Avatar">
                        @else
                            <!-- Nếu không có avatar, bạn có thể hiển thị ảnh mặc định hoặc thông báo khác -->
                            <p>No avatar available</p>
                        @endif
                    </div>
                @else
                    <div class="user-name">Chưa đăng nhập</div>
                    <div class="user-avt">
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="">
                    </div>

                @endauth

            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{route('home')}}"><strong>PTU</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thể loại <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            @foreach($allCategories as $category)
                                <li><a href="{{ route('category.show', $category->categoryID) }}">{{ $category->categoryName }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin Tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên Hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    @auth
                        @if(Auth::user()->role === 'admin')
                        <li class="nav-item">
                            <a href="{{ route('stories.index') }}" class="nav-link">Dashboard</a>
                        </li>
                        @endif
                    @endauth
                    @if(Auth::check())

                    <li class="nav-item">
                        <form action="{{ route('custom.logout') }}" method="post">
                            @csrf
                            <button class="nav-link" type="submit" style="border: none;background: none">Đăng xuất</button>
                        </form>
                    </li>
                    @else
                        <!-- Hiển thị nội dung cho người dùng chưa đăng nhập -->
                        <!-- Nếu người dùng chưa đăng nhập -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('custom.login.form')}}">Đăng nhập</a>
                        </li>
                    @endif
                    {{-- @auth
                    <li class="nav-item">
                        <form action="{{ route('custom.logout') }}" method="post">
                            @csrf
                            <button type="submit">Đăng xuất</button>
                        </form>
                    </li>
                    @else
                        <!-- Nếu người dùng chưa đăng nhập -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('custom.login.form')}}">Đăng nhập</a>
                        </li>
                    @endauth --}}

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</header>
