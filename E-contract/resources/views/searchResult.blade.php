
@extends('adminNave')
@section('content')
<div class="container">
<div class="row">
@foreach($user as $u)
<div class="col-sm-12 d-flex justify-content-center text-center ">
        <div class="product card border   rounded  "style="width: 18rem;" >    
        <img class="card-img-top " src="{{asset($u->image)}}">
        <div class="card-body">
            <h3>{{$u->name}}</h3>
            <h3>{{$u->national_id}}</h3>
            <h4>{{$u->email}}</h4>
            <h3>{{$u->age}}</h3>
            <h3>{{$u->address}}</h3>
        </div>
        </div>
</div>
@endforeach
<br>
<h1 class="my-5" style=" padding-left: 45%">cars</h1>
<div class="container">
<div class="row">
@for($i=0; $i < count($carrs); $i++)
@foreach($carrs[$i] as $car)
<div class="col-md-6  d-flex justify-content-center text-center ">
        <div class="product border card  rounded " >
           
            
            <h3>{{$car->model}}</h3>
            <h3>{{$car->serial}}</h3>
            <h4>{{$car->color}}</h4>
        </div>
  
        
@endforeach

@endfor
</div>
</div>
</div>
@endsection