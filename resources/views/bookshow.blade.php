@extends('dashboard')

@section('content')

<a href="{{route('books')}}" style="margin-left: 220px;" class="btn btn-secondary btn-lg ">Back</a>
<div class="container my-5">

    <div class="row col-12">
        <div class="col-5">
            <img style="height: 100%;width:100%;" src="{{ asset('images/'.$books->image )}}">
        </div>
        <div class="col-7">
            <div style="text-align: center;">
                <h3> {{$books->name}}</h3>
                <h4> {{$books->author}}</h4>
                <h4> {{$books->section->name}}</h4>
                <h2> About this book</h2> 
                <p>{{$books->description}}</p>
                
            </div>
        </div>
    </div>
    <div class="row col-12 my-3">
        <div class="col-5" style="text-align:center">
            <p>Rate: {{$books->rate}} |  Type: <i class="bi bi-journal-bookmark-fill"></i>E-book  |  Sahifalar soni: 
                <i class="bi bi-journal-bookmark-fill"></i>{{$books->page_size}}
            </p>
        </div>
        <div class="col-7">
            <button type="submit" class="btn btn-success form-control">
                Sotib olish: @if($books->cost!='' )  {{$books->cost}} US$ @else Bepul  @endif</button>
        </div>
    </div>

</div>

@endsection