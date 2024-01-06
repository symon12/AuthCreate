<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Validated;

class UserTableController extends Controller
{
    public function registration(){

       
        return view("Auth.registration");
    }

      
    public function post(Request $request){
        $this->validate($request, [
            "name" => "required|string|max:150",
            "email" => "required|unique:users,email|string|max:250",
            "password" => "required|string|min:4",
            "password_confirmation" => "required|string|min:4|same:password",
        ]);

        // User::dd();
        
        User::create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => Hash::make($request->input("password")),
        ]);
    
        auth()->attempt($request->only("email","password"));
        return redirect()->route("post.create");
    }
    
    
    

    public function login(){
        return view("Auth.login");
    }

    public function LoginPost(Request $request){
        $this->validate($request,[
            "email" => "required|string|max:250",
            "password" => "required|string|min:4",
        ]);

        User::created([
            "email" => $request->input("email"),
            "password"=>Hash::make($request->input("password"))
        ]);
        if(!auth()->attempt($request->only("email","password"),$request->remember)){
            return back()->with("status","Invalid login details");
        }
        return redirect()->route("post.create");
       
    }

    public function __invoke()
    {
        auth()->logout();
        return redirect()->route("login");
    }



    

    public function forget()
    {
        return view("Auth.forget");
    }
    
    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required|min:4',
            'password' => 'required|min:4',
            'password_confirmation' => 'required|same:password',
        ]);
    
        if (auth()->check()) {
            if (!Hash::check($request->old_password, auth()->user()->password)) {
                return back()->with("error", "Old Password Doesn't match!");
            }
    
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->password)
            ]);
    
            // return back()->with("status", "Password changed successfully!");
            return redirect()->route("post.create");
        } else {

            return back()->with("error", "User not authenticated");
        }

      
    }
    
    }


