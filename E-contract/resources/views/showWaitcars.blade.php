@extends('adminNave')
@section('title') 
Wait cars
@endsection

@section('content')

<div class="container">
    <div class="row">
        @foreach($carss as $car)
<div class="col-md-4  d-flex justify-content-center text-center ">
        <div class="product border card  rounded  " >
           
            
            <h3>{{$car->model}}</h3>
            <h3>{{$car->serial}}</h3>
            <h4>{{$car->color}}</h4>
           
            <div>
            <form class="form-inline  mx-2 my-lg-0" action="{{url('/E-contract/acceptcar',$car->serial)}}" method="post">
            @csrf
            <button class="btn btn-warning" >Accept</button>
            </form>
            <form class="form-inline mx-2 py-2  my-lg-0" action="{{url('/E-contract/deletecar',$car->serial)}}"method="post">
            @csrf
            <button class="btn btn-danger ">delete</button>
            </form>
            </div>
        </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

