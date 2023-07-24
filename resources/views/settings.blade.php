@extends('dashboard')
@section('content')

<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 my-3" style="text-align:center">SETTINGS </h1>

                    
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
                                <th>NAME</th>
                                <th>AUTHORS</th>
                                <th>COST </th>
                                <th>RATE</th>
                                <th>PUBLISHER</th>
                                <th>ISSUE</th>
          
                                <th style="width: 300px;">ACTION</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr style="background-color:darkturquoise;text-align: center;">
                                <th style="width: 100px;">N</th>
                                <th>NAME</th>
                                <th>AUTHORS</th>
                                <th>COST </th>
                                <th>RATE</th>
                                <th>PUBLISHER</th>
                                <th>ISSUE</th>
                                <th style="width: 300px;">ACTION</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($books as $s )                                                                           
                            <tr style="text-align: center;">
                                <td >{{$loop->iteration}}</td>
                                <td>{{$s->name}}</td>
                                <td>{{$s->author}}</td>
                                @if($s->cost != '')
                                <td>{{$s->cost}}</td>
                                @else
                                <td>Bepul</td>
                                @endif
                                <td>{{$s->rate}}</td>
                                <td>{{$s->publisher}}</td>
                                @if($s->issue!='')
                                    <td><span class="badge badge-danger">Issued</span></td>
                                @else
                                    <td><span class="badge badge-success">Available</span></td>

                                 @endif        
                                <td>
                                    <a href="{{route('bookview',$s->id)}}" class='btn btn-success'><i class='fa fa-eye'></i></a>
                                    <a href="{{route('editsettings',$s->id)}}" class='btn btn-info'><i class='fa fa-edit'></i></a>
                                    <a href="{{route('deletesettings',$s->id)}}" class='btn btn-danger'><i class='fa fa-trash'></i></a>
                                </td>
                            </tr>                                    
                            @endforeach
                        </tbody>
                    </table> 
                </div>
            </div>
        
</div>



@endsection