@extends('layout')

@section('content')

<div class="d-flex justify-content-center w-100">
    
<form class="mx-auto w-25" action="/users/{{$user->id}}" method="POST"> 
    @csrf
    @method('PUT')
    <h2 class="text-center">Edit</h2><br>
    <label for="name" >Name:</label><br>
    <input type="text" name="name" id="name" placeholder="Enter your name" value="{{$user->name}}" class="w-100"> <br><br>
    @error('name')
    <p class="text-danger fs-1 mt-1"><small>{{$message}}</p></small></p>
    @enderror

    <label for="Email" >Email:</label><br>
    <input type="email" name="email" id="email" placeholder="Enter your email" value="{{$user->email}}" class="w-100"><br><br>
    @error('email')
    <p class="text-danger fs-1 mt-1"><small>{{$message}}</p></small></p>
    @enderror

    <label for="address" >Address:</label><br>
    <input type="text" name="address" id="address" placeholder="Enter your address" value="{{$user->address}}" class="w-100"><br><br>
    @error('address')
    <p class="text-danger fs-1 mt-1"><small>{{$message}}</p></small></p>
    @enderror

    <label for="password" >Password:</label><br>
    <input type="password" name="password" id="password" placeholder="At least 6 characters" value="{{$user->password}}" class="w-100"><br><br>
    @error('password')
    <p class="text-danger fs-1 mt-1"><small>{{$message}}</p></small></p>
    @enderror

    <div class="d-flex justify-content-around">
        <button type="submit" class="btn  btn-primary align-self-end  w-20 ">Update</button>
        <button onclick="/" class="btn  btn-primary align-self-end bg-secondary w-20 ">Back</button>
    </div>
</form>
</div>

@endsection