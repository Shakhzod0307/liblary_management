@extends('dashboard')

@section('content')

<div class="container my-3">

        <form action="{{route('updatesettings', $settings->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
            <label for="name">Book name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{$settings->name}}">
        </div>
        <div class="form-group">
            <label for="name1">Author </label>
            <input type="text" name="author" class="form-control" id="name1" value="{{$settings->author}}">
        </div>
        <div class="form-group">
            <label for="name2">Category</label>
            <input type="text" name="section_id" class="form-control" id="name2" value="{{$settings->section->name}}">
        </div>
        <div class="form-group">
            <label for="name3">Cost</label>
            <input type="text" name="cost" class="form-control" id="name3" value="{{$settings->cost}}">
        </div>
        <div class="form-group">
            <label for="name4">Rate</label>
            <input type="text" name="rate" class="form-control" id="name4" value="{{$settings->rate}}">
        </div>
        <div class="form-group">
            <label for="name5">Image</label>
            <input type="file" name="image" class="form-control" id="name5" value="{{$settings->image}}">
        </div>
        
        <div class="form-group">
            <label for="name6">Publisher</label>
            <input type="text" name="publisher" class="form-control" id="name6" value="{{$settings->publisher}}">
        </div>
        <div class="form-group">
            <label for="name7">Issue</label>
            <input type="text" name="issue" class="form-control" id="name7" value="{{$settings->issue}}">
        </div>
        
        <a href="{{route('settings')}}" class="btn btn-secondary" >Back</a>
        <button type="submit" class="btn btn-success">Update</button>
    
        </form>

</div>


@endsection