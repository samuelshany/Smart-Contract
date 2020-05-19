@extends('usernave')
@section('title') 
Home
@endsection
@section('content')
<div class="container w-25 mt-5">
            <div class="row d-flex justify-content-center align-items-center">
<div class="col-md-12" id="vari">
                    <form action="{{url('E-contract/storeCar')}}" method="post">
                    @csrf
                        <div class="form-group mt-1">
                            <label>Car Model</label>
                            <input type="text" class="form-control" name="model" required>
                        </div>
                        <div class="form-group mt-1">
                            <label>Car serial</label>
                            <input type="text" class="form-control" name="serial" required>
                        </div>
                        <div class="form-group mt-1">
                            <label>Car color</label>
                            <input type="text" class="form-control" name="color" required>
                        </div>
                        
                        <button class="btn btn-primary mb-4" id="login" onclick="hello()">Add Car</button>
                    </form> 
                </div>
            </div>
</div>
                @endsection