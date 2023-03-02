@extends('layout.app')
@section('content')


<!-- Latest Product Section -->
<section class="featured spad mt-5">
    <div class="container">
        <div class="section-title">
            <h2>Products</h2><br>
            <div class="row featured__filter">
            @foreach ($products as $prod)
            <div class="col-lg-2 col-md-4 col-sm-6 mix">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset($prod->logo)}}">
                        <ul class="featured__item__pic__hover">
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
            </div>
        </div>
    </div>
</section>
<!-- Latest Product Section End -->



@endsection