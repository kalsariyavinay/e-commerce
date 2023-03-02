@extends('layout.app')
@section('content')

 <!-- Hero Section Begin -->
 <section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All</span>
                    </div>
                    <ul>
                        <li><a href="{{route('mobile')}}">Mobiles</a></li>
                        <li><a href="{{route('fashion')}}">Fashion</a></li>
                        <li><a href="{{route('kitchen')}}">Kitchen</a></li>
                        <li><a href="">Gift Cards</a></li>
                        <li><a href="">Camera and Photography</a></li>
                        <li><a href="">Video Games</a></li>
                        <li><a href="">Books</a></li>
                        <li><a href=""> Sports</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="{{asset('frontend/img/fashion/cat-0.jpg')}}">
                    <div class="hero__text">
                        <h2 style="color:#0e6a7fd9" ><b>World fashion</b></h2>
                        <a href="" class="primary-btn">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

 <!-- Categories Section Begin -->
 <section class="fashion">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{asset('frontend/img/fashion/cat-1.jpg')}}">
                        <h5><a href="">SIRIL Women's Kurta</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{asset('frontend/img/fashion/cat-2.jpg')}}">
                        <h5><a href="">Latest Trendy Shoes</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{asset('frontend/img/fashion/cat-3.jpg')}}">
                        <h5><a href="">Men Shirt</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{asset('frontend/img/fashion/cat-4.jpg')}}">
                        <h5><a href="">watch for Men</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{asset('frontend/img/fashion/cat-5.jpg')}}">
                        <h5><a href="">Men & Women Goggles</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

 <!-- Featured Section Begin -->
 <section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Fashions</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".kurta">Kurta</li>
                        <li data-filter=".shoes">Shoes</li>
                        <li data-filter=".shirt">Shirt</li>
                        <li data-filter=".watch">Watch</li>
                        <li data-filter=".goggles">Goggles</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix kurta">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/fashion/cat-1.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">Siril Women Kurta</a></h6>
                        <h5>₹800</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix shoes">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/fashion/cat-2.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">Latest Trendy Shoes</a></h6>
                        <h5>₹3,000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix shirt">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/fashion/cat-3.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">Men Shirt</a></h6>
                        <h5>₹600</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix watch">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/fashion/cat-4.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">watch for Men</a></h6>
                        <h5>₹1,500</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix goggles">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/fashion/cat-5.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">Men & Women Goggles</a></h6>
                        <h5>₹400</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix kurta">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/fashion/cat-6.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">Kurta for Men</a></h6>
                        <h5>₹600</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix shoes">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/fashion/cat-7.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">SLIPPER FOR MEN </a></h6>
                        <h5>₹199</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix shirt">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/fashion/cat-8.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">T-Shirt for Women</a></h6>
                        <h5>₹299</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix watch">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/fashion/cat-9.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">Watch For Women</a></h6>
                        <h5>₹399</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix kurta">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/fashion/cat-10.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">Kurta For Kids</a></h6>
                        <h5>₹249</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured Section End -->

  <!-- Banner Begin -->
  <div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="{{asset('frontend/img/fashion/cat-11.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="{{asset('frontend/img/fashion/cat-12.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Latest Product Section Begin -->
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-1.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Siril Women Kurta</h6>
                                    <span>₹800</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-2.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Latest Trendy Shoes</h6>
                                    <span>₹3,000</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-3.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Men Shirt</h6>
                                    <span>₹600</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-4.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>watch for Men</h6>
                                    <span>₹1,500</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-5.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Men & Women Goggles</h6>
                                    <span>₹400</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-6.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6> Kurta for Men</h6>
                                    <span>₹600</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Top Rated Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-7.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>SLIPPER FOR MEN</h6>
                                    <span>₹199</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-8.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>T-Shirt for Women</h6>
                                    <span>₹299</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-9.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Watch For Women</h6>
                                    <span>₹399</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-10.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Kurta For Kids</h6>
                                    <span>₹249</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-1.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Siril Women Kurta</h6>
                                    <span>₹800</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-2.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Latest Trendy Shoes</h6>
                                    <span>₹3,000</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Review Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-3.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Men Shirt</h6>
                                    <span>₹600</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-4.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>watch for Men</h6>
                                    <span>₹1,500</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-5.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Men & Women Goggles</h6>
                                    <span>₹400</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-6.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Kurta For Men</h6>
                                    <span>₹699</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-7.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>SLIPPER FOR MEN</h6>
                                    <span>₹199</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/fashion/cat-8.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>T-Shirt for Women</h6>
                                    <span>₹299</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Product Section End -->

@endsection