
<html>
    <head>
    <link rel="stylesheet" href="{{asset('assets/css')}}/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('assets/css')}}/all.min.css">
        <link rel="stylesheet" href="{{asset('assets/css')}}/index.css">
        <title id="title">E-contract</title>
    </head>
    <body>
        <nav id="navBar" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{url('E-contract/')}}">E-contract</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        
       
    <form class="form-inline my-2 my-lg-0 mx-2" action="{{url('/E-contract/login')}}">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
    </form>
    <form class="form-inline my-2 my-lg-0 mx-2" action="{{url('/E-contract/signup')}}">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign up</button>
    </form>
    <?php
    
    ?>
  </div>
        
        
    </nav>
    </body>
</html>