<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyUsers;
use DataTables;

class FindBloodController extends Controller
{
    // public function index(){
    //     $usersData = MyUsers::all();
    //     return view('findblood' , compact('usersData'));
    // }

    // public function findblood(Request $request){
    //     // dd($request->all());
    //     $userStatus = $request->users;
    //     $userCity = $request->city;

    //     if($request->isMethod('post')){
    //         $usersData = MyUsers::where('city' ,'like',"%$userCity%")
    //         ->where('status' ,'like',"% $userStatus%")
    //         ->get();
    //         // dd($usersData);
    //         return $usersData;
    //     }
    // }

    // public function showUsers(){
    //     return DataTables::of(MyUsers::query())->make(true);
    // }
}