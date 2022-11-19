@extends('layout')

@section('content')

<div class="d-flex justify-content-center w-100 p-3">
    
<form class="mx-auto w-25" action="/users" method="POST"> 
    @csrf
    <h2 class="text-center">Register</h2><br>
    <label for="name" >Name:</label><br>
    <input type="text" name="name" id="name" placeholder="Enter your name" value="{{old('name')}}" class="w-100"> <br><br>
    @error('name')
    <p class="text-danger fs-1 mt-1"><small>{{$message}}</p></small></p>
    @enderror

    <label for="Email" >Email:</label><br>
    <input type="email" name="email" id="email" placeholder="Enter your email" value="{{old('email')}}" class="w-100"><br><br>
    @error('email')
    <p class="text-danger fs-1 mt-1"><small>{{$message}}</p></small></p>
    @enderror

    <label for="address" >Address:</label><br>
    <input type="text" name="address" id="address" placeholder="Enter your address" value="{{old('address')}}" class="w-100"><br><br>
    @error('address')
    <p class="text-danger fs-1 mt-1"><small>{{$message}}</p></small></p>
    @enderror

    <label for="password" >Password:</label><br>
    <input type="password" name="password" id="password" placeholder="At least 6 characters" value="{{old('password')}}" class="w-100"><br><br>
    @error('password')
    <p class="text-danger fs-1 mt-1"><small>{{$message}}</p></small></p>
    @enderror

    <label for="password2" >Confirm Password:</label><br>
    <input type="password" name="password_confirmation" id="password" placeholder="Confirm your password" value="{{old('password-confirmation')}}" class="w-100"><br><br>
    @error('password_confirmation')
    <p class="text-danger fs-1 mt-1"><small>{{$message}}</p></small></p>
    @enderror

    <button type="submit" class="btn  btn-primary align-self-end  w-20 ">Register</button>
</form>
</div>

@endsection