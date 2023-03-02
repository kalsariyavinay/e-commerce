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
                            <span>Category</span>
                        </div>
                        <ul>
                            @foreach ($categorys as $cat)
                            <li><a href=""> {{$cat->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Mobiles
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Enter Type Product">
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
                    <div class="hero__item set-bg" data-setbg="{{asset('frontend/img/hero/banner-1.jpg')}}">
                        <div class="hero__text">
                            <h2 class="text-center" style="padding:130px; height:260px; color:#ddc91c">India's Smartphone <br/>Starting At <br/>₹8,499</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Mobile slider -->
    @foreach ($categorys as $cat)
    <section class="mobile">
        <div class="container">
            <div class="section-title">
                <h2>{{$cat->name}}</h2>
            </div>
            <div class="row">
                <div class="categories__slider owl-carousel">
                @foreach ($cat->subcategorys as $sub)
                <div class="col-lg-3">

                    <div class="categories__item set-bg">
                    <a href="{{route('products',$sub->slug ?? "")}}">
                        <img src="{{asset($sub->logo)}}" alt="Image">
                    </a>
                        <h5><a href="{{route('products',$sub->slug ?? "")}}">{{$sub->subcategory}}</a></h5>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- End Mobile slider -->

    <!-- Featured Section Begin -->
    @foreach ($categorys as $cat)
    <section class="featured spad mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>{{$cat->name}}</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @foreach ($cat->subcategorys as $subcat)
                            <li data-filter=".{{str_replace(" ","",$subcat->subcategory)}}" onclick="sliderproduct('{{str_replace(' ','',$subcat->subcategory)}}')">{{$subcat->subcategory}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($cat->subcategorys as $subcat)
                    @foreach ($subcat->products as $prod)
                        <div class="col-lg-2 col-md-4 col-sm-6 mix {{str_replace(" ","",$subcat->subcategory)}}">                                     
                            <div class="featured__item">

                                <div class="featured__item__pic set-bg">
                                    <a href={{route('shopdetails',$prod->slug ?? "")}}>
                                        <img src="{{asset($prod->logo)}}" alt="Image">
                                    </a>                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="{{route('shopdetails',$prod->slug ?? "")}}">{{$prod->product}}</a></h6>
                                    <h5>₹{{$prod->price}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
    @endforeach
    <!-- Featured Section End -->

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
                                        <img src="{{asset('frontend/img/mobile/cat-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Oppo Reno8 5G</h6>
                                        <span>₹28,999</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/mobile/cat-2.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Apple iPhone 14 Pro</h6>
                                        <span>₹1,79,999</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/mobile/cat-3.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Mi 10</h6>
                                        <span>₹54,999</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/mobile/cat-4.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>OnePlus 10 Pro 5G</h6>
                                        <span>₹61,999</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/mobile/cat-5.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Vivo iQOO 9 Pro 5G</h6>
                                        <span>₹46,999</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/mobile/cat-6.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>MI 11X Pro 5G</h6>
                                        <span>₹36,999</span>
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
                                        <img src="{{asset('frontend/img/mobile/cat-7.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Apple iPhone 14 128GB</h6>
                                        <span>₹78,999</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/mobile/cat-8.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>OnePlus 10T 5G</h6>
                                        <span>₹55,999</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/mobile/cat-9.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Vivo V23 5G</h6>
                                        <span>₹26,000</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/mobile/cat-10.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Oppo Reno7 Pro 5G</h6>
                                        <span>₹32,999</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/mobile/cat-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Oppo Reno8 5G</h6>
                                        <span>₹28,999</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/mobile/cat-2.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Apple iPhone 14 Pro</h6>
                                        <span>₹1,79,999</span>
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
                                        <img src="{{asset('frontend/img/mobile/cat-3.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Mi 10</h6>
                                        <span>₹54,999</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/mobile/cat-4.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>OnePlus 10 Pro 5G</h6>
                                        <span>₹61,999</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/mobile/cat-5.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Vivo iQOO 9 Pro 5G</h6>
                                        <span>₹46,999</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/mobile/cat-6.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>MI 11X Pro 5G</h6>
                                        <span>₹36,999</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/mobile/cat-7.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Apple iPhone 14 128GB</h6>
                                        <span>₹78,999</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('frontend/img/mobile/cat-8.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>OnePlus 10T 5G</h6>
                                        <span>₹55,999</span>
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

    <script>
        function sliderproduct(setclass){
            $("."+setclass).removeAttr("style")
        }
    </script>

@endsection

