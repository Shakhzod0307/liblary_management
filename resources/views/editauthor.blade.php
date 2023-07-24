@extends('dashboard')
@section('content')

<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 my-3" style="text-align:center">Edit Author </h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>                        
    @endif

     <form action="{{route('updateauthor',$author->id)}}"  method="POST">
        @csrf
        <div class="row my-5">
            <div class="col-7">
                <input type="text" name="author" class="form-control" value="{{$author->author}}"><br>
            </div>
            <div class="col-1">
            <a href="{{route('authors')}}" class="btn btn-secondary btn-md ">Back</a>
            </div>
            <div class="col-4">
                <input type="submit" class="btn btn-success form-control" value="Update">
            </div>
            
            
        </div>
     </form>              
    

</div>



@endsection