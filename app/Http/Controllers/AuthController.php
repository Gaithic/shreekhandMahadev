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
        $districts =  District::all();
        $circles  = Circle::all();
        $divisions = Division::all();
        $ranges   = Range::all();
        $dist_id = District::where('id',0)->get();
        $circle_id  = Circle::where('id', 0)->get();
        $division_id = Division::where('id', 0)->get();
        $range_id  = Range::where('id', 0)->get();

      return view('auth.register',["districts" => $dist_id,
            'districts' => $districts,
            'circles' => $circle_id,
            'circles' => $circles,
            'divisions' => $divisions,
            'divisions' => $division_id,
            'ranges' => $range_id,
            'ranges' => $ranges,
            'offices' => $offices
        ]);
    }


    public function getCircle(Request $request)
    {
        $parent_id = $request->dist_id;
        $division_id = $request->dist_id;
        $range_id = $request->dist_id;
        $circles = District::where('id', $parent_id)
                              ->with('circles')
                              ->get();
        $divisions = Circle::where('district_id', $division_id)->with('divisions')->get();
        $ranges = Division::where('circle_id', $range_id)->with('ranges')->get();
        return response()->json([
            'circles' => $circles,
            'divisions' => $divisions,
            'ranges' => $ranges
        ]);
    }

    public function getRanges(Request $request){
        $division_id = $request->id;
        $ranges = Division::where('id', $division_id)->with('ranges')->get();
        return response()->json([
            'ranges' => $ranges,
        ]);
    }



    public function saveRegisterUser(RegisterFormValidation $request){
        
    }

    public function loginView(){
        return view('auth.login');
    }


}
