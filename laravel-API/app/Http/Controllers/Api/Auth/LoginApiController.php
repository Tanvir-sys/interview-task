<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginApiController extends Controller
{
    public function createToken(){

        $user=User::first();
        $accesToken=$user->createToken('Token Name')->accessToken;
        return $accesToken;

     }
     public function login(Request $request){
         $login=$request->validate(

            [
                'email'=>'required|string',
                'password'=>'required',
            ]
         );
         if(!Auth::attempt($login)){
             return 'False';

         }else{
            return 'True';
         }

        $user=User::first();
        $accesToken=$user->createToken('Token Name')->accessToken;
        return $accesToken;

     }

     public function register(Request $request){

        $this->$request->validate(

            [
                'email'=>'required|string',
                'password'=>'required',
            ]
         );
         $user= new User;
         $user->email=$request->email;
         $user->password=$request->password;
         $user->save();


     }

     public function list(){

        $user= User::all();
        return $user;
     }

}
