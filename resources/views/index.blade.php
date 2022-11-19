@extends('layout')

@section('content')

<div class="container p-3">
    @auth
<table class="table table-striped w-50 mx-auto" >
    <thead>
        <tr>
            <th >Users</th>
            <th >Delete</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $user)
            <tr>

                <td> <a href="users/{{$user->id}}/edit">{{$user->name}}</a></td> 
                <td>
                    <form method="POST" action="/users/{{$user->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-link"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="text-center h-100 mt-1"><div class="message">

    <h1>USER CRUD APPLICATION</h1><br>
    <h4>Login/Register to start.</h4>
</div></div>

@endauth
</div>
    
    

@endsection
