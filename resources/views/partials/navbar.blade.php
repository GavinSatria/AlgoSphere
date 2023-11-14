<section class="menu-area">
    <div class="container-xl">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <ul class="mobile-header-buttons">
                        <li><a class="mobile-nav-trigger" href="#mobile-primary-nav">Menu<span></span></a></li>
                        <li><a class="mobile-search-trigger" href="#mobile-search">Search<span></span></a></li>
                    </ul>

                    @include('partials.menu')

                    

                    <div class="wishlist-box menu-icon-box" id="wishlist_items">
                        {{--Wishlist will be here--}}
                    </div>

                    @auth
                        <div class="user-box menu-icon-box">
                            <div class="icon">
                                <a href="">
                                    <img src="{{ asset('images/avatar.png') }}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="dropdown user-dropdown corner-triangle top-right">
                                <ul class="user-dropdown-menu">

                                    <li class="dropdown-user-info">
                                        <a href="">
                                            <div class="clearfix">
                                                <div class="user-image float-left">
                                                    <img src="{{ asset('images/avatar.png') }}" alt=""
                                                         class="img-fluid">
                                                </div>
                                                <div class="user-details">
                                                    <div class="user-name">
                                                        <span class="hi">hi,</span>
                                                        <?php echo auth()->user()->first_name . ' ' . auth()->user()->last_name ?>
                                                    </div>
                                                    <div class="user-email">
                                                        <span class="email">{{ auth()->user()->email }}</span>
                                                        <span class="welcome">Welcome back</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="user-dropdown-menu-item">
                                        <a href="{{ route('user.courses') }}">
                                            <i class="far fa-gem"></i>My Courses
                                        </a>
                                    </li>
                                    <li class="user-dropdown-menu-item">
                                        <a href="">
                                            <i class="far fa-heart"></i>My Wishlist
                                        </a>
                                    </li>
                                    <li class="user-dropdown-menu-item">
                                        <a href="{{ route('user.profile') }}">
                                            <i class="fas fa-user"></i>User profile
                                        </a>
                                    </li>
                                    <li class="dropdown-user-logout user-dropdown-menu-item">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    @endauth

                    <a class="topnav" href="https://fonts.googleapis.com/css?family=Audiowide">
                        {{--<img src="" alt="" height="30">--}}
                        <h1 style="color:black; text-align:center; float: none; position: absolute; left: 50%;
                         transform: translate(-50%, -50%); font-family: 'Audiowide', sans-serif;"> AlgoSphere </h1>
                    </a>

                </nav>
            </div>
        </div>
    </div>
</section>
