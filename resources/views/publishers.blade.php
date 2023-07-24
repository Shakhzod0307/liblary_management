@extends('dashboard')
@section('content')

<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 my-3" style="text-align:center">All PUBLISHERS </h1>
    @if (session('success'))
    <div style="text-align: center;" class="alert alert-success">
        {{session('success')}}
    </div>                        
    @endif
                    
    <!-- DataTales Example -->
    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                        <thead>
                            <tr style="background-color:darkturquoise;text-align: center;">
                                <th style="width: 100px;">N</th>
                                <th>PUBLISHERS NAME</th>
          
                                @if(Auth::user()!='')
                                    @if(Auth::user()->username=='shahzod')
                                        <th style="width: 300px;">ACTION</th>
                                    @endif              
                                @endif 
                            </tr>
                        </thead>
                        <tfoot>
                            <tr style="background-color:darkturquoise;text-align: center;">
                                <th style="width: 100px;">N</th>
                                <th>PUBLISHERS NAME</th>
                                               
                                @if(Auth::user()!='')
                                    @if(Auth::user()->username=='shahzod')
                                        <th style="width: 300px;">ACTION</th>
                                    @endif              
                                @endif 
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($publishers as $p )                                                                           
                            <tr style="text-align: center;">
                                <td >{{$loop->iteration}}</td>
                                <td>{{$p->publisher}}</td>
                                @if(Auth::user()!='')
                                    @if(Auth::user()->username=='shahzod')        
                                    <td>
                                        <a href="{{route('editpublisher', $p->id)}}" class='btn btn-info'><i class='fa fa-edit'></i></a>
                                        <a href="{{route('deletepublisher', $p->id)}}" class='btn btn-danger'><i class='fa fa-trash'></i></a>
                                    </td>
                                    @endif
                                @endif
                            </tr>                                    
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        
</div>



@endsection