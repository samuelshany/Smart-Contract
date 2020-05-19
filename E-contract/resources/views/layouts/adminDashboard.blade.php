
<html>
    <head>
    <link rel="stylesheet" href="{{asset('assets/css')}}/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('assets/css')}}/all.min.css">
        <link rel="stylesheet" href="{{asset('assets/css')}}/index.css">
        <title id="title">@yield('title')</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{url('/E-contract/Ahome')}}">E-CONTRACT</a>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active mt-1">
        <a class="nav-link "  href="{{url('/E-contract/Ahome/')}}"><i class="fas fa-home"></i> Home<span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item mt-1">
      <a class="nav-link "  href="{{url('/E-contract/waitCars')}}"><i class="fas fa-car"></i> cars <span style="color: red">{{$cars}}</span> </a>
      </li>
      <li>
     
      <a class="nav-link  mt-1 "  href="{{url('/E-contract/waitUsers')}}"><i class="fas fa-user"> users </i><span style="color: red">{{$users}}</span> </a>
      
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="{{url('E-contract/search')}}">
    @csrf
      <input class="form-control mr-sm-2" name="national_id" type="search" placeholder="Search by id" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <form class="form-inline my-2 my-lg-0 mx-2" action="{{url('/E-contract/logout')}}">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
    </form>
  </div>
</nav>

    </body>
</html>