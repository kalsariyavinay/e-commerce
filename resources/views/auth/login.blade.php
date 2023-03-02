@extends('layout.app')
@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-5">
                    {{-- <form method="POST" action="{{ route('login') }}"> --}}
                    <form class="login-form" method="post" action="{{route('login') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <input type="email" id="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <input type="password" id="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>
                    
                        <button type="submit" class="btn btn-lg btn-block mt-3 text-white site-btn"><b>{{ __('Login') }}</b></button>
                    
                        <div class="text-center pt-3 pb-3">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>                       
                    </form><hr>

                    @if (Route::has('register'))
                        <a class="nav-link  btn-primary rounded text-center" href="{{ route('register') }}" style="font-size:140%;">{{ __('Create New Account') }}</a>
                    @endif
                    
                    <p class="pt-3 text-center"><b>Login a Account </b>for a shopping.</p>

                </div>
            </div>
        </div>
    </section>   

    
@endsection
