<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liblary System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>



<div class="offset-md-4 col-md-4">
    <div class="logo">
       <img style="width:500px; height:80px;" src="{{ asset('images/library.png') }}">
    </div>
</div>
  <nav  class="navbar navbar-expand-sml navbar-red bg-danger justify-content-center">

  <ul  class="nav justify-content-center">
    <li class="nav-item">
        <a  class="nav-link active" href="{{route('books')}}">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('authors')}}">Authors</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('sections')}}">Categories</a>
    </li>
    <li class="nav-item">
        <a class="nav-link "href="{{route('publishers')}}">Publishers</a>
    </li>
    @if(Auth::user()!='')
        @if(Auth::user()->username=='shahzod')
            <li class="nav-item">
                <a class="nav-link "href="{{route('settings')}}">Settings</a>
            </li>
        @endif
        <li class="nav-item">
            <a class="nav-link "href="{{route('profile')}}">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link "href="{{route('profilesettings')}}">Profile Settings</a>
        </li>
        <li class="nav-item">
            <a class="nav-link "href="{{route('logout')}}">Logout</a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link "href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link "href="{{route('register')}}">Register</a>
        </li>
    @endif
  </ul>

  </nav> 
  @yield('content')

  
<style>
li.a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid green;
  border-radius: 10px;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

li:hover, li:active {
  background-color: white;
  color: white;
}
</style>




</body>
</html>












            

 


 
            

            

            

            

   