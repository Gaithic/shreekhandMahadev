<?php

namespace App\Http\Controllers;

use App\Http\Requests\userActivity;
use App\Models\Activity;
use App\Models\OfficesName;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function usersDashboard(Request $request){
        $user   = User::all();
        $offices = OfficesName::all();
        $office_d = OfficesName::where('id', 0)->get();
     
        return view('users.users.dashboard',[
            'user' => $user,
            'offices' => $offices,
            'offices'   => $office_d
        ]);
    }



    public function getOffices(Request $request){        

        $parent_id = $request->activity_id;
        $offices = OfficesName::where('office_id', $parent_id)
                              ->with('offices')
                              ->get();
        return response()->json([
            'offices' => $offices
        ]);
    }

    public function saveActivity(userActivity $request){ 
        $activity = new Activity();
        $activity->name = $request->name;
        $activity->description = $request->description;
        $activity->datetime  = $request->datetime;
        $activity->	activityName = $request->activityName;	
        $res = $activity->save();
        if($res){
            return redirect()->intended(route('user.index'))->with('success', 'Task Created Successfully!!');
        }
    }
}
