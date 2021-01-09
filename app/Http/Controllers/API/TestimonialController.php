<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class TestimonialController extends Controller
{
    //Login Validation basic
	
	public function insertTestimonial(Request $request){
		//return $request;
		$query = DB::insert("INSERT INTO testimonials SET full_name='".$request->full_name."',email='".$request->email."',content='".$request->content."',image='".$request->image."'");
			
		if($query){
			return view('Admin.testimonial');
		}
		else{
			return view('Admin.add-testimonial');
		}
	}
}
