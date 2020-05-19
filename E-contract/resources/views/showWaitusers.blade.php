@extends('adminNave')
@section('title') 
Wait users
@endsection
@section('content')

<div class="container">
    <div class="row">
        @foreach($userss as $user)
<div class="col-md-4  d-flex justify-content-center text-center ">
        <div class="product border card  rounded  " >
           
        <img class="card-img-top " src="{{asset($user->image)}}">
            <h3>{{$user->name}}</h3>
            <h3>{{$user->national_id}}</h3>
            <h4>{{$user->email}}</h4>
            <h3>{{$user->age}}</h3>
            <h3>{{$user->address}}</h3>
            <div>
            <form class="form-inline  mx-2 my-lg-0" action="{{url('/E-contract/acceptuser',$user->national_id)}}" method="post">
            @csrf
            <button class="btn btn-warning" >Accept</button>
            </form>
            <form class="form-inline mx-2 py-2  my-lg-0" action="{{url('/E-contract/deleteuser',$user->national_id)}}"method="post">
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

