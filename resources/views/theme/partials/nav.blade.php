<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('theme.index') }}">Coffee<small>Almolok</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item  @yield('active-home')"><a href="{{ route('theme.index') }}" class="nav-link">Home</a></li>
                <li class="nav-item @yield('active-menu')"><a href="{{ route('theme.menu') }}" class="nav-link">Menu</a></li>
                <li class="nav-item @yield('active-services')"><a href="{{ route('theme.services') }}" class="nav-link">Services</a></li>
                <li class="nav-item @yield('active-about')"><a href="{{ route('theme.about') }}" class="nav-link">About</a></li>

                <li class="nav-item @yield('active-contact')"><a href="{{ route('theme.contact') }} " class="nav-link">Contact</a></li>
                <li class="nav-item cart @yield('active-cart')"><a href="{{ route('cart.show') }}" class="nav-link"><span
                            class="icon icon-shopping_cart"></span></a>

                    @if (!Auth::check())
                        <li class="nav-item  @yield('active-login')">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item  @yield('active-register')">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                    @else
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu">
                                {{-- Example: My Blogs Link --}}
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('blogs.my-blog') }}">My Blogs</a>
                                </li> --}}

                                {{-- Logout --}}
                                <li class="nav-item">
                                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a class="nav-link" href="#"
                                        onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                        Logout
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.orders') }}">
                                        Your orders
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.Bookings') }}">
                                        Your Bookings
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif


            </ul>
        </div>
    </div>
</nav>