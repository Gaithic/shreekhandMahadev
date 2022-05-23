<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormValidation;
use App\Models\Circle;
use App\Models\District;
use App\Models\Division;
use App\Models\OfficesName;
use App\Models\Range;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function mainView(){
        return view('layout.master');
    }

    public function registerView(){
        $offices = OfficesName::all();
        $dist_id = District::where('id', 0)->get();
        $districts = District::all();
        $circles = Circle::all();
        $divisions = Division::all();
        $ranges =   Range::all();
        // dd($dist_id);
        return view('auth.register', [
            'districts' =>$dist_id,
            'offices' => $offices,
            'districts' => $districts,
            'circles' => $circles,
            'divisions' => $divisions,
            'ranges' => $ranges
        ])->with('success', "Create your account");
    }

    public function saveRegisterUser(RegisterFormValidation $request){
        $user = new User();
        $user->name = $request->name;
        $user->designation = $request->designation;
        $user->date_of_birth = $request->date_of_birth;
        $user->date_of_joining = $request->date_of_joining;
        $user->office = $request->office;
        $user->district = $request->district;
        $user->range = $request->range;
        $user->gender = $request->gender;
        $user->circle = $request->circle;
        $user->division = $request->division;
        $user->office_address = $request->office_address;
        $user->qualification = $request->qualification;
        $user->username = trim(strtolower($request->username));
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->isadmin  = 0;
        $user->status = 0;
        $res = $user->save();
        if($res){
            return redirect()->intended(route('login-view'))->with('success', 'Your account is created Kindly Wait for Admin Approval!!');
        }else{
            return redirect()->intended(route('regiter-view'))->with('error', 'Oops Something Went Wrong Kindly try after sometime!');
        }

    }

    public function loginView(){
        return view('auth.login');
    }

    public function getCircles(Request $request){
        $parent_id  = $request->dist_id;
        $circles = District::where('id', $parent_id)->with('circles')->get();
        return response()->json([
            'circles' => $circles
        ]);
    }
}
