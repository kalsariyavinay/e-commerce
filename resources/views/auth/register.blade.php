@extends('layout.app')
@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-5">
                    <form method="POST" action="{{ route('register') }}">
                    @csrf

                        <div class="mb-3">
                            <input id="name" type="text" placeholder="Enter your name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input id="email" type="email" placeholder="Enter your email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input id="password" type="password" placeholder="New password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input id="password-confirm" type="password" placeholder="Confirm password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                        
                        </div>
                        <button type="submit" class="btn btn-lg btn-block mt-3 site-btn">{{__('Register')}}</button>
                        <p class="pt-3 text-center"><b>Create a Account </b>for a shopping.</p>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection