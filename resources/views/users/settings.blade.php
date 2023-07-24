@extends('dashboard')

@section('content')


<section style="background-color: #eee;">
  <div class="container py-5">
     @if(session('success'))
        <div class="alert alert-success  text-center m-2">
            {{session('success')}}
        </div>
    @endif
<form action="{{route('profileupdate')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">

      <div class="col-lg-4">

        <form-group class="card mb-4">
          <div class="card-body text-center">
            <input type="file" style="height: 100%;" value="{{Auth::user()->image}}" name="image"  alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;"><hr>
              <label for="image">Username:</label>
            <input type="text" id="image" class="my-3 form-control" name="username" value="{{Auth::user()->username}}">

          </div>
        </form-group>



      </div>

      <from-group style="height: 688px;" class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="form-group row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <input type="text"name="name"  class="text-muted mb-0 form-control" value=" {{Auth::user()->name}}">
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <input type="email" name="email"  class="text-muted mb-0 form-control" value=" {{Auth::user()->email}}">
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <input type="text" name="phone"  class="text-muted mb-0 form-control" value="  {{Auth::user()->phone}}">
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <textarea name="address" rows="2" class="text-muted mb-0 form-control" value="  {{Auth::user()->address}}"></textarea>
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <div class="col-sm-3">
                <p class="mb-0">Bio</p>
              </div>
              <div class="col-sm-9">
                <textarea name="bio" rows="3" class="text-muted mb-0 form-control" value="  {{Auth::user()->bio}}"></textarea>
              </div>
            </div>
         
        </div>
    </div>
    
    <input type="submit" class="btn btn-success" value="Update">
</from-group>
</div>

</form>
</div>

</section>


@endsection