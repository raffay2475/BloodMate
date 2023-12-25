<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyUsers;
use App\Models\BloodBank;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class FrontendController extends Controller
{
    public function index(){
    	return view('home');
    }
    public function login(){
        return view('login');
    }
    public function logout(){
        Session()->flush();
        return redirect('/login');
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
    public function contactcopy(){
        return view('contactcopy');
    }
    public function contact(){
        return view('contact');
    }
    public function donorDashboard(){
        if(session()->exists('isadmin')){

            return view('layouts.dashboard.donordashboard.donorDashboard');
        }
        else{
            return redirect('/login');
        }
    }
    public function donorprofile(){
        return view('layouts.dashboard.donordashboard.donorprofile');
    }
    public function certifyuser(){
        return view('layouts.dashboard.donordashboard.certifyuser');
    }

    public function adminDashboard(){
        if(session()->exists('isadmin')){

            return view('layouts.dashboard.admindashboard.adminDashboard');
        }
    }

    public function makeCertify(){
        $myusers = MyUsers::all();
        return view('layouts.dashboard.admindashboard.makeCertify',compact('myusers'));
    }
    public function bbDashboard(){
        if(session()->exists('isadmin')){

            return view('layouts.dashboard.bloodbankdashboard.bbDashboard');
        }
        else{
            return redirect('/login');
        }
    }

    public function bbprofile(){
        return view('layouts.dashboard.bloodbankdashboard.bbprofile');
    }
    public function profilepicture(){
        $myusers = MyUsers::all();
        return view('layouts.dashboard.donordashboard.profilepicture', compact('myusers'));
    }
    public function userprofiledisplay($id=""){
        $myusers = MyUsers::where('id', $id)->first();
        return view('userprofiledisplay', compact('myusers'));
    }
    public function stepone(){
        return view('layouts.donationways.stepone');
    }
    public function steptwo(){
        return view('layouts.donationways.steptwo');
    }
    public function stepthree(){
        return view('layouts.donationways.stepthree');
    }
    public function faqbasic(){
        return view('faqbasic');
    }
    public function faq1(){
        return view('layouts.faq.faq1');
    }
    public function faq2(){
        return view('layouts.faq.faq2');
    }
    public function faq3(){
        return view('layouts.faq.faq3');
    }
    public function faq4(){
        return view('layouts.faq.faq4');
    }
    public function faq5(){
        return view('layouts.faq.faq5');
    }
    public function faq6(){
        return view('layouts.faq.faq6');
    }
    public function faq7(){
        return view('layouts.faq.faq7');
    }
    public function faq8(){
        return view('layouts.faq.faq8');
    }
    public function faq9(){
        return view('layouts.faq.faq9');
    }
    public function faq10(){
        return view('layouts.faq.faq10');
    }
    public function faq11(){
        return view('layouts.faq.faq11');
    }
    public function faq12(){
        return view('layouts.faq.faq12');
    }
    // public function bbdashboard(){
    //     return view('bbdashboard');
    // }
    public function findblood(){
        $myusers = MyUsers::all();
        return view('findblood', compact('myusers'));
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
        $myusers->blood = $request->bloodgroup;
    	$myusers->username=$request->username;
    	$myusers->password=$request->password;
    	$myusers->phoneno=$request->phno;
    	$myusers->status=$request->status;
    	$myusers->save();

    	return view("login")->with("message", "You successfully register in System");
    }

    public function dologin(Request $request){

    	$myusers = MyUsers::where('username', $request->username)->where('password', $request->password)->first();
    	if($myusers){
    		session()->put("username", $myusers->username);
            session()->put("uid", $myusers->id);
            if($myusers->status=='Donor'){
                session()->put("isadmin", true);
                return redirect("/donorquiz");

            }
            elseif($myusers->status=='BloodBank'){
                session()->put("isadmin", true);
                return redirect("/bbdashboard")->with("message", "You successfully login");
            }
            elseif($myusers->status=='Admin'){
                session()->put("isadmin", true);
                return redirect("/adminDashboard")->with("message", "You successfully login");
            }
            else{
                return redirect("/findblood")->with("message", "You successfully login");
            }

    	}
    	else{
    		return redirect("/login")->with("message", "Wrong Credentials Entered");
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
    public function dobbregister(Request $request){
            $request->validate([
            "bbname"=>"unique:bloodbank",
    		"fulname"=>"min:8|unique:bloodbank",
    		"password"=>"min:8",
    		"rpassword"=>"same:password",
    	]);
        $musers = new MyUsers();
        $musers->id=null;
    /* values from column name in db */
        $musers->fname=$request->bbname;/* values from input name attribute */
    	$musers->lname=$request->fulname;
        $musers->blood="";
        $musers->password = $request->bbpassword;
    	$musers->email=$request->bbemail;
    	$musers->city=$request->city;
    	$musers->username=$request->bbname;
    	$musers->password=$request->bbpassword;
    	$musers->phoneno=$request->phno;
    	$musers->status='BloodBank';
    	$musers->save();

        $data = DB::select('SELECT id FROM users ORDER BY id DESC LIMIT 1');
        // return $data;
    	$myusers = new BloodBank();
    	$myusers->id=null;
        $myusers->uid=$data[0]->id;
    	$myusers->bbname=$request->bbname;
    	$myusers->bbemail=$request->bbemail;
    	$myusers->fulname=$request->fulname;
        $myusers->password = $request->bbpassword;
    	$myusers->phno=$request->phno;
    	$myusers->address=$request->address;
    	$myusers->city=$request->city;
    	$myusers->state=$request->state;
        $myusers->zipcode=$request->zipcode;
        $myusers->country=$request->country;
        $myusers->daysOn=$request->days;
        $myusers->blood=$request->blood;
        $myusers->inventory=$request->inventory;
        $myusers->certificate=$request->certificate;
        $myusers->epname=$request->epname;
        $myusers->ephone=$request->ephone;
    	$myusers->save();
    }
    public function dosearchdb(Request $request){
        // return $request->all();
        $myusers = DB::select('select * from users where city=? and blood=? and status=?',
        [$request->city,$request->bloodgroup,$request->identity]);
         return view('findblood', compact('myusers'));
    }
    public function docertify(Request $request){
    $request->file('certificate')->move(public_path('certificate'), $request->file('certificate')
    ->getClientOriginalName());
    $myuser=MyUsers::find($request->id);
    $myuser->image=$request->file('certificate')->getClientOriginalName();
    $myuser->verification='Verified';
    $myuser->save();

    }
    public function doeditprofile(Request $request){
        $data = MyUsers::where('id', $request->id)->first();
        $data->username=$request->username;
        $data->password=$request->password;
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->city=$request->city;
        $data->phoneno=$request->phoneno;

        $data->save();
        return redirect()->back()->with('message', 'Update Successfully');
    }

    public function doapprove($value=""){
// return $value;
        $myuser=MyUsers::where('id',$value)->first();
        $myuser->verification='Verified';
        $myuser->save();
        return back();
    }
    public function dodisapprove($value=""){
        // return $value;
        $myuser=MyUsers::where('id',$value)->first();
        $myuser->verification='Not Verified';
        $myuser->save();
        return back();
    }
    public function doprofilepicture(Request $request){
        $request->file('profilepicture')->move(public_path('assets/profilepicture'), $request->file('profilepicture')
        ->getClientOriginalName());
        $myuser=MyUsers::find($request->id);
        $myuser->profilepic=$request->file('profilepicture')->getClientOriginalName();

        $myuser->save();
        return redirect('/profilepicture');
        }
}

