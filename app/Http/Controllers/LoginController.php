<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Auth;
class LoginController extends Controller
{
    public function login(){
        if(!Auth::check()){
            return view('auth.login');
        }else{
            return redirect()->route('blog.index');
        }
    	
    }
    public function register(){
    	return view('register');
    }
    public function PostRegister(Request $request){
    	$data = $request->all();
    	$validator =  Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
        if($validator->fails()){
        	return redirect()->back()->withInput($data)->withErrors($validator);
        }else{
        	// $user = User::create([
        	// 		'name' => $data['name'],
        	// 		'email' => $data['email'],
        	// 		'password' => bcrypt($data['password'])
        	// 	]);
        	$user = new User;
        	$user->name = $data['name'];
        	$user->email = $data['email'];
        	$user->password = bcrypt($data['password']);

        	$user->save();
        	Auth::login($user,true);//True la ghi nho mat khau 

        	//method 2
        	// Auth::loginUsingId($user->id);

        	
        }
    }
      public function postLogin(Request $request){
        $data = $request->all();

        $validator = Validator::make($data,[
                'email' => 'required',
                'password' => 'required'
            ]);
        if($validator->fails()){
            return response()->json([
                    'error' => true,
                    'message' => $validator->errors(),
                ],200);
        }else{
            $field = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
            $request->merge([$field => $request->input('email')]);
           
            if(Auth::attempt($request->only($field, 'password'),$request->has('remember'))){
                return response()->json([
                    'error' => false,
                    'message' => 'success',
                ],200);
            }else{
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors(),
                ],200);
            }
        }
    }

    public function logout(){
        Auth::logout();
    	return redirect()->route('login');   
    }
}
