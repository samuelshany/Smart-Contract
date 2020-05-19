@extends('adminNave')
@section('title') 
Home
@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach($user as $us)
        <div class="col-md-12  d-flex justify-content-center text-center ">
        <div class="product border card  rounded  " >
            <img class="card-img-top " src="{{$us->image}}">
            <h1>{{session('national_id')}}</h1>
            <h3>{{$us->name}}</h3>
            <h3>{{$us->national_id}}</h3>
            <h4>{{$us->email}}</h4>
            <h3>{{$us->age}}</h3>
            <h3>{{$us->address}}</h3>
            <div>
            
            </div>
        </div>
        </div>
        @endforeach
        </div>
        </div>
@endsection