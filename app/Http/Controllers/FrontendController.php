<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyUsers;
use App\Models\DonorQuiz;
use DB;

class FrontendController extends Controller
{
    public function index(){
    	return view('login');
    }
    public function register(){
    	return view('register');
    }
    public function bbregister(){
        return view('bloodbankinfo');
    }
    public function donorquiz(){
        return view('layouts.1');
    }
    public function quizsubmitted(){
        return view('layouts.quizsubmitted');
    }
    public function temp(){
        return view('temp');
    }

    public function doregister(Request $request){
    	$request->validate([
    		"username"=>"min:8|unique:users",
    		"password"=>"min:8",
    		"rpassword"=>"same:password",
    	]);
    	$myusers = new MyUsers();
    	$myusers->id=null;
    /* values from column name in db */	$myusers->fname=$request->fname;/* values from input name attribute */
    	$myusers->lname=$request->lname;
    	$myusers->email=$request->email;
    	$myusers->city=$request->city;
    	$myusers->username=$request->username;
    	$myusers->password=$request->password;
    	$myusers->phoneno=$request->phno;
    	$myusers->status=$request->status;
    	$myusers->save();

    	return redirect("/")->with("message", "You successfully register in System");
    }

    public function dologin(Request $request){
    	$myusers = MyUsers::where('username', $request->username)->where('password', $request->password)->first();
    	if($myusers){
    		session()->put("username", $myusers->username);
            session()->put("uid", $myusers->id);
            if($myusers->status=='Donor'){
                return redirect("/donorquiz");
    
            }
            else{
                return redirect("/")->with("message", "You successfully login");
            }
    
    	}
    	else{
    		return redirect("/")->with("message", "Wrong Credentials Entered");
    	}
    }
    public function showquiz($q="", $ans=""){
        //x return $request->all();
        $myquiz = DB::select('select * from donorquiz where id=? and ans=?',[$q,$ans]);
        if($myquiz){
            $q++; 
            return view("layouts.".$q);     
        }
        //return $myquiz;       
       
        return view("layouts.noteligible");
    }
}
