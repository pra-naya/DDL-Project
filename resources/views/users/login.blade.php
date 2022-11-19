@extends('layout')

@section('content')

<div class="d-flex justify-content-center w-100 p-3">
    <form class="mx-auto w-25" action="/users/authenticate" method="POST"> 
    @csrf
    <h2 class="text-center">Login</h2><br>

    <label for="Email" >Email:</label><br>
    <input type="email" name="email" id="email" placeholder="Enter your email" value="{{old('email')}}" class="w-100"><br><br>
    @error('email')
    <p class="text-danger fs-1 mt-1"><small>{{$message}}</p></small></p>
    @enderror

    <label for="password" >Password:</label><br>
    <input type="password" name="password" id="password" placeholder="Enter your password" value="{{old('password')}}" class="w-100"><br><br>
    @error('password')
    <p class="text-danger fs-1 mt-1"><small>{{$message}}</p></small></p>
    @enderror


    <button type="submit" class="btn  btn-primary align-self-end  w-20 ">Login</button>
</form>
</div>

@endsection