<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;

class PassportAuthController extends Controller
{
    public function register(Request $request){
        /*
            $validator = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required | max:255 | unique:admins',
                'phone_number' => 'required | unique:admins',
                'address' => 'required',
                'password' => 'required',
            ]);

            if ($validator->fails()){
                return $validator -> errors();
            }
            
            $admin = Admin::create([
                'name' => $request ->name,
                'email' => $request ->email,
                'phone_number' => $request ->phone_number,
                'address' => $request ->address,
                'password' => $request ->password,
            ]);
            $admin->save();
            */

            $user=User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=> bcrypt($request->password)
            ]);
            $user->save();
            

            $token=$user->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token'=>$token],200);
    }


    public function login(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(auth()->attempt($data)){
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token' => $token], 200);
        }else{
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

}