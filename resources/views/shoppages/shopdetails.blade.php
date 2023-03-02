@extends('layout.app')
@section('content')

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                @foreach ($products as $prod)
                <div class="col-lg-6 col-md-6 mix">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{asset($prod->logo)}}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3 class="text-gray-700 uppercase">{{ $prod->product }}</h3>
                        <form action="{{route('cart.store',$prod->id)}}" method="post"  role="button" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$prod->id}}" name="product_id">
                         

                            
                            <div class="product__details__rating">

                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <span>(18 reviews)</span>
                            </div>
                            
                            <div class="product__details__price">
                                    <option id="price" value="{{$prod->id}}">₹{{$prod->price}}</option>
                            </div>
                            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam
                                vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet
                                quam vehicula elementum sed sit amet dui. Proin eget tortor risus.</p>
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" id="quantity" value="1" name="quantity">
                                    </div>
                                </div>
                            </div><br><br>

                            <button type="submit" class="btn btn-lg btn-block mt-3 rounded-pill" style="background:#f9eb24">ADD TO CARD</button>
                            <a href="{{route('buynow',$prod->id ?? "")}}" class="btn btn-lg btn-block mt-3 rounded-pill" style="background:#ff9f00"><b>Buy Now</b></a>
                            <ul>
                                <li><b>Availability</b> <span>In Stock</span></li>
                                <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                                <li><b>Weight</b> <span>0.5 kg</span></li>
                                <li><b>Share on</b>
                                    <div class="share">
                                        <a href="https://www.facebook.com/vinay.kalaariya" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="https://www.instagram.com/itz_a_vinay" target="_blank"><i class="fa fa-instagram"></i></a>
                                        <a href="https://www.youtube.com/@vinaykalsariya" target="_blank"><i class="fa fa-youtube"></i></a>
                                        <a href="https://www.linkedin.com/in/vinay-kalsariya-8872b0249" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
