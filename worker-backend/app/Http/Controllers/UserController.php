<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    function register(Request $req){

$user=new User;

            $user->name=$req->input('name');
            $user->email=$req->input('email');
            $user->password=Hash::make($req->input('password'));
            $user->save();
        return $user;
    }


function Login(Request $req){
       // $user=new User;

        $user = User::where('email',$req->email)->first();
 if (!$user || !Hash::check($req->password,$user->password))
 {
return ["error"=>" Eamil or Password is Not Matched"];

 }
        return $user;
    }

}
