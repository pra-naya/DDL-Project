<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function index(){

        return view('index', [
            'users' => User::all()
        ]);
    
        }

    //Show Register/Create Form
    public function create(){
        return view('users.register');
    }

    //Create New User
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required','min:3'],
            'email'=> ['required', 'email', Rule::unique('users', 'email')],
            'address' => 'required',
            'password' => 'required|confirmed|min:6' 
        ]);

        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);


        //Create User
        $user = User::create($formFields);

        //Login
        auth()->Login($user);

        return redirect('/');
    }


    //Logout User
    public function logout(Request $request){

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


    //Show Login Form
    public function login(){
        return view('users.login');
    }

    //Authenticate User
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email'=> ['required', 'email'],
            'password' => 'required' 
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/');
        }

            return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
        }

        public function edit($id){
            $user = User::findorFail($id);
            return view("users.edit", ['user'=>$user]);
        }


        //Update User Information
        public function update(Request $request, User $user){
            $formFields = $request->validate([
                'name' => ['required','min:3'],
                'email'=> ['required', 'email'],
                'address' => 'required',
                'password' => 'required|min:6' 
            ]);

            //Hash Password
            $formFields['password'] = bcrypt($formFields['password']);


            //Update User
        $user->update($formFields);

            return redirect('/');
        }

        //Delete User
        public function destroy(User $user){
            $user->delete();
            return redirect('/');
}

}
