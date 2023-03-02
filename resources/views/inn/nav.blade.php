    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div id="app">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                        <!-- Left Side Of Navbar -->
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__left">
                                <ul>
                                    <li><i class="fa fa-envelope"></i> hello@vinay.com</li>
                                    <li>Shipping Starting at ₹8,499</li>
                                </ul>
                            </div>
                        </div>
                        <div class="header__top__right">

                            <div class="header__top__right__social">
                                <a href="https://www.facebook.com/vinay.kalaariya" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/itz_a_vinay" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.youtube.com/@vinaykalsariya" target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/in/vinay-kalsariya-8872b0249" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                            </div>

                            <div class="header__top__right__language">
                                <img src="{{asset('frontend/img/language.png')}}" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                         </div>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">

                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
    
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <!-- navbar in logout option  -->
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <div class="navbar-nav flex-column">
                                            <ul class="list-unstyled mb-0">

                                                <li class="nav-item ">
                                                    <a class="nav-link" href="{{route('myaccount')}}"><i class="fa fa-user"></i> 
                                                        MY Account</a>
                                                </li>                                                

                                                <li class="nav-item ">
                                                    <a class="nav-link" href="{{route('address')}}"><i class="fa fa-address-book"></i>
                                                        Address</a>
                                                </li>

                                                <li class="nav-item ">
                                                    <a class="nav-link" href="{{route('purchase')}}"><i class="fa fa-shopping-cart"></i>
                                                    Purchase History </a>
                                                </li>
                                                
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="{{route('wishlist')}}"><i class="fa fa-heart"></i>
                                                        Wishlist</a>
                                                </li>

                                                <li class="nav-item ">
                                                    <a class="nav-link" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        <i class="fa fa-sign-out"></i> 
                                                        {{ __('Logout') }}
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{route('home')}}"><img src="{{asset('frontend/img/log.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('shopgrid')}}">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                            <li><a href="{{route('mobile')}}">Mobiles</a></li>
                            <li><a href="{{route('fashion')}}">Fashion</a></li>
                            <li><a href="{{route('kitchen')}}">Kitchen</a></li>
                            </ul>
                        </li>
                        <li><a href="">Blog</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>₹15,999.00</span></div>
                </div>
            </div>
        </div>
            <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
    </header>
    <!-- Header Section End -->