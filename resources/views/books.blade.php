
@extends('dashboard');

@section('content')
<div class="container my-3">
    <h2 style="text-align: center;" >Welcome to Liblary System</h2>
    <div style="margin-left: 5px;" class="row col-12 my-3">
        @foreach ($books as $book)
            <div class="col-3">
            <div class="card" style="width: 18rem;">
            <a href="{{route('bookview',$book->id)}}"><img style="height: 300px;width:100%;" src="{{ asset('images/'.$book->image )}}"></a>    
                <div class="card-body">
                    <h6 class="card-title text-align:center;">{{$book->name}}</h6>
                    <p class="card-text ">rate: {{$book->rate}} <i class="fa fa-star-fill"></i>
                     cost: @if($book->cost!='' )  {{$book->cost}} US$ @else Bepul  @endif </p>
                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection