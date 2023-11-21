<header class="bg-light">
    <div class="container">
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
                            <li><a href="">sub 1</a></li>
                            <li><a href="">sub 2</a></li>
                            <li><a href="">sub 3</a></li>
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
                    
                    @guest
                        <li class="nav-item"><a class="nav-link" href="{{ url('login') }}"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('register') }}"><span class="glyphicon glyphicon-user"></span> Đăng ký</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link">{{ Auth::user()->name }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('logout') }}"><span class="glyphicon glyphicon-log-in"></span>Đăng xuất</a></li>
                    @endguest
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</header>
