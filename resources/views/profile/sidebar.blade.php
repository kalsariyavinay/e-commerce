@extends('layout.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4 m-3 p-3">
                <ul class="list group profile-nav">

                    <li class="list-group-item text-white" style="background-color:#ff8003">
                        <a id="navbarDropdown" class="nav-link " href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{Auth::user()->name}}
                        </a>
                    </li>
                    <li class="list-group-item" style="background-color:#00356c">
                        <a href="{{route('myaccount')}}"><i class="fa fa-user"></i> 
                            MY Account</a>
                    </li>                                                

                    <li class="list-group-item" style="background-color:#00356c">
                        <a href="{{route('address')}}"><i class="fa fa-address-book"></i>
                            Address</a>
                    </li>

                    <li class="list-group-item" style="background-color:#00356c">
                        <a href="{{route('purchase')}}"><i class="fa fa-shopping-cart"></i>
                        Purchase History </a>
                    </li>
                    
                    <li class="list-group-item" style="background-color:#00356c">
                        <a href="{{route('wishlist')}}"><i class="fa fa-heart"></i>
                            Wishlist</a>
                    </li>

                    <li class="list-group-item" style="background-color:#00356c">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> 
                            {{ __('Logout') }}
                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-md-7 m-3 p-3">
                @yield('profile')
            </div> 
        </div>
    </div>


@endsection

