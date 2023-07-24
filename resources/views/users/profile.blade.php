@extends('dashboard')

@section('content')


<section style="background-color: #eee;">
  <div class="container py-5">
  @if(session('success'))  
  <div class="alert alert-success">
    {{session('success')}}
  </div>
  @endif
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img style="height: 100%;" src="{{asset('profile/'.Auth::user()->image)}}" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;"><hr>
            <h5 class="my-3">Username:</h5>
            <h5 class="my-3">@ {{Auth::user()->username}}</h5>
            <h6 class="my-3">@if(Auth::user()->username=='shahzod')Admin @endif</h6>
    

            <!-- <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div> -->
          </div>
        </div>

      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">User Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::user()->username}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::user()->name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::user()->email}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::user()->phone}}</p>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::user()->address}}</p>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Bio</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::user()->bio}}</p>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Join Date</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{Auth::user()->created_at}}</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


@endsection