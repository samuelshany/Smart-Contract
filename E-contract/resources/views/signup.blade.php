
@extends('userLayout')
@extends('index')
@section('title')
sign up
@endsection      
@section('content')
@if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{$error}}   
                            </div>
                            @endforeach
                                @endif
        <div class="container w-25 mt-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-12" id="vari">
                  
                <form action="{{url('/E-contract/store')}}" method="post"  enctype="multipart/form-data" >
                @csrf
                        <div class="form-group mt-1">
                            <label>User Name</label>
                            <input type="text" value="{{old('userName')}}" class="form-control" name="userName" required>
                        </div>
                        <div class="form-group mt-1">
                            <label>User Email</label>
                            <input type="email" value="{{old('email')}}" class="form-control" name="email" required>
                        </div>
                        <div class="form-group mt-1">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group mt-1">
                            <label>Age</label>
                            <input type="text" value="{{old('age')}}" class="form-control" name="age" required>
                        </div>
                        <div class="form-group mt-1">
                            <label>National Id</label>
                            <input type="text" value="{{old('national_id')}}" class="form-control" name="national_id" required>
                        </div>
                        <div class="form-group mt-1">
                            <label>Address</label>
                            <input type="text" value="{{old('address')}}" class="form-control" name="address" required>
                        </div>
                        <div class="form-group mt-1">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" accept="image/*">
                        </div>
                        <div class="form-group mt-1">
                            <label>National Id image</label>
                            <input type="file"  class="form-control" name="nImage" required accept="image/*">
                        </div>
                        <button class="btn btn-primary mb-4" id="login" onclick="hello()">Sign up</button>
                    </form> 
                </div>
            </div>
        </div>
@endsection