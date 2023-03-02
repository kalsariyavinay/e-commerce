@extends('profile.sidebar')
@section('profile')

    <div class="col-md-12 m-3 p-3">
        <div class="card">
            <div class="card-body rounded" style="background-color:#00356c">
                <div>
                    <form class="row align-items-end"  id="edit_profile" method="post" action="" novalidate="novalidate">
                        @csrf

                        <!-- First name -->
                        <div class="mb-3 col-12 col-md-6">
                            <label class="form-label text-white" for="">First Name</label>
                            <input type="text" id="" name="" class="form-control" value="{{Auth::user()->name}}">
                        </div>
                        
                        <input type="hidden">
                        <div class="mb-3 col-12 col-md-6 text-white">
                            <label class="form-label" for="">Email</label>
                            <input type="email" id="" readonly="" name="" class="form-control" placeholder="Email" value="{{Auth::user()->email}}">
                        </div>

                        <div class="col-12 mb-3">
                            <button class="site-btn rounded" type="submit">
                                edit details
                            </button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>  




@endsection