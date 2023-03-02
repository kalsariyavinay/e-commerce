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
                <div class="hero__item set-bg" data-setbg="{{asset('frontend/img/kitchen/cat-0.jpg')}}">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

 <!-- Categories Section Begin -->
 <section class="kitchen">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{asset('frontend/img/kitchen/cat-1.jpg')}}">
                        <h5><a href="">MG-214 mixer grinder</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{asset('frontend/img/kitchen/cat-2.jpg')}}">
                        <h5><a href="">Cold Press Juicer</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{asset('frontend/img/kitchen/cat-3.jpg')}}">
                        <h5><a href="">AGARO Hand Blender</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{asset('frontend/img/kitchen/cat-4.jpg')}}">
                        <h5><a href="">Auto Pop up Toaster</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{asset('frontend/img/kitchen/cat-5.jpg')}}">
                        <h5><a href="">Grill Sandwich Maker</a></h5>
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
                    <h2>Kitchen & Home</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".mixer">Mixer</li>
                        <li data-filter=".juicer">Juicer</li>
                        <li data-filter=".blender">Blender</li>
                        <li data-filter=".toaster">Toaster</li>
                        <li data-filter=".sandwich">Sandwich</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix mixer">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/kitchen/cat-1.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">MG-214 mixer grinder</a></h6>
                        <h5>₹3,599</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix juicer">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/kitchen/cat-2.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">Cold Press Juicer</a></h6>
                        <h5>₹13,999</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix blender">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/kitchen/cat-3.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">AGARO Hand Blender</a></h6>
                        <h5>₹1,899</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix toaster">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/kitchen/cat-4.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">Auto Pop up Toaster</a></h6>
                        <h5>₹1,299</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix sandwich">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/kitchen/cat-5.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">Grill Sandwich Maker</a></h6>
                        <h5>₹1,949</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix blender">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/kitchen/cat-6.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">Portable Blender for Smoothies</a></h6>
                        <h5>₹2,599</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix juicer">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/kitchen/cat-7.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">Viva Collection Juicer</a></h6>
                        <h5>₹7,899</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix blender">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/kitchen/cat-8.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">blender for coffee</a></h6>
                        <h5>₹649</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix sandwich">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset('frontend/img/kitchen/cat-9.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="">Jumbo Grill Sandwich Maker</a></h6>
                        <h5>₹4,999</h5>
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
                    <img src="{{asset('frontend/img/kitchen/cat-11.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="{{asset('frontend/img/kitchen/cat-12.jpg')}}" alt="">
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
                                    <img src="{{asset('frontend/img/kitchen/cat-1.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Oppo Reno8 5G</h6>
                                    <span>₹28,999</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/kitchen/cat-2.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Cold Press Juicer</h6>
                                    <span>₹13,999</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/kitchen/cat-3.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>AGARO Hand Blender</h6>
                                    <span>₹1,899</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/kitchen/cat-4.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auto Pop up Toaster</h6>
                                    <span>₹1,299</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/kitchen/cat-5.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Grill Sandwich Maker</h6>
                                    <span>₹1,949</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/kitchen/cat-6.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Portable Blender for Smoothies</h6>
                                    <span>₹2,599</span>
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
                                    <img src="{{asset('frontend/img/kitchen/cat-7.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Viva Collection Juicer</h6>
                                    <span>₹7,899</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/kitchen/cat-8.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>blender for coffee</h6>
                                    <span>₹649</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/kitchen/cat-9.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Jumbo Grill Sandwich Maker</h6>
                                    <span>₹4,999</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/kitchen/cat-10.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Oppo Reno7 Pro 5G</h6>
                                    <span>₹32,999</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/kitchen/cat-1.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Oppo Reno8 5G</h6>
                                    <span>₹28,999</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/kitchen/cat-2.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Cold Press Juicer</h6>
                                    <span>₹13,999</span>
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
                                    <img src="{{asset('frontend/img/kitchen/cat-3.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>AGARO Hand Blender</h6>
                                    <span>₹1,899</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/kitchen/cat-4.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auto Pop up Toaster</h6>
                                    <span>₹1,299</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/kitchen/cat-5.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Grill Sandwich Maker</h6>
                                    <span>₹1,949</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/kitchen/cat-6.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6> Portable Blender for Smoothies</h6>
                                    <span>₹2,599</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/kitchen/cat-7.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Viva Collection Juicer</h6>
                                    <span>₹7,899</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('frontend/img/kitchen/cat-8.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>blender for coffee</h6>
                                    <span>₹649</span>
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