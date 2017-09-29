<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
class DashboardController extends Controller
{
    // public function __construct(){
    // 	$this->middleware('auth');
    // }
    public function index(){
    	$email = 'nam94@gmail.com';
    	// $user = User::select()->where('name','LIkE','%a%')->get();
  		$user = DB::table('users')->where('name','LIkE','%a%')->get();
  		$find = User::find([2,3]);
  		$all = User::select()->where('id')->get();
  		$id = User::whereRaw('id %2 =?',0)->get();//Truyen tham so vao dau ?
  		$group = User::where('name','LIKE','%a%')->orWhere(function($query) use($email){
  	  			$query->where('id','>',5)->where('email','=',$email);
  		})->get();
  		paginate(20);//phan trang
    	return view('home',[

    			'user' => $user,
    		]);
    }
    public function profile(){
    	dd('ok');
    }
}
