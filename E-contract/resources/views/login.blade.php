
@extends('userLayout')
@extends('index')
@section('title')
login 
@endsection      
@section('content')
        <div class="container w-25 mt-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-12" id="vari">
                    <form action="{{url('/E-contract/check')}}" method="post">
                    @csrf
                        <div class="form-group mt-5">
                            <label>User Email</label>
                            <input type="text" class="form-control" name="userEmail">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="userPassword">
                         </div>
                        <button class="btn btn-primary mb-4"   >login</button>
                    </form> 
                </div>
            </div>
        </div>
@endsection
        
  