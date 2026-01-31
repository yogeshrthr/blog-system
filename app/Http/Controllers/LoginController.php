<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller

{

    public function login(Request $request){
        if($request->isMethod('post')){
            $validate =Validator::make($request->all(),[
                'email'=>'required|email',
                'password'=>'required|string',
            ]);
        if($validate->fails()){
            return response()->json(['status'=>401,'message'=>'Validation Failed','error'=>$validate->errors()],200);
        }
        $user=User::where(['email'=>$request->email])->first();
        if(!$user){
            return response()->json(['status'=>400,'message'=>"Please Enter correct Email Address"],200);
        }
        if(!Hash::check($request->password,$user->password)){
            return response()->json(['status'=>400,'message'=>"Please Enter correct Password"],200);
        }
            Auth::login($user);
            return response()->json(['status'=>200,'message'=>"Welcome Back $user->name"],200);
        }else{
            return view('login');

        }

    }
    public function register(Request $request){
        try {
            if($request->isMethod('post')){                
                $validate=Validator::make($request->all(),[
                    'name'=>'required|string',
                    'email'=>'required|email|string|unique:users',
                    'password'=>'required|string',
                    'confirm_password'=>'required|same:password|string',
                ]);
                if($validate->fails()){
                    return  response()->json(['status'=>400,'message'=>"validion failed",'errors'=>$validate->errors()]);
                }
                User::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>Hash::make($request->password),
                    'status'=>'active',
                ]);
                return response()->json(['status'=>200,'message'=>'user regsiterd successfuly','error'=>[]]);
            }else{
                return view('signup');
            }
        }catch(\Exception $e){            
            return response()->json(['status'=>500,'message'=>'Somethign went wrong','error'=>$e->getMessage()],500);

        }
       

    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login'); // or wherever you wa

    }
}
