<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class LoginController extends Controller
{
    //Login Validation basic
	
	public function login(Request $request){
		
		//return "SELECT * FROM admin where email='".$request->email."' AND password='".$request->password."'";
		
		$query = DB::select("SELECT * FROM admin WHERE email='".$request->email."' AND password='".$request->password."'");
		$num = count($query);
		
		if($num >= 0){
			$request->session()->put('email',$request->email);
			return view('Admin.index');
		}
		else{
			return view('Admin.login');
		}
	}
}
