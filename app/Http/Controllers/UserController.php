<?php

namespace App\Http\Controllers;

use App\Http\Requests\userActivity;
use App\Models\Activity;
use App\Models\Holidays;
use App\Models\OfficesName;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

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
        $activity->activityName = $request->activityName;
        $activity->user_id = Auth::user()->id;
        	
        $res = $activity->save();
        if($res){
            return redirect()->intended(route('user.index'))->with('success', 'Task Created Successfully!!');
        }
    }

    public function showAllActivity(Request $request){
        
        if($request->ajax()){
            $user = Auth::user();
            $data= Activity::query()->orderBy("id", "desc");

            return DataTables::of($data)
                ->addIndexColumn()->addColumn('action', function($row){
                    $btn= '<a href="'.route('edit-holidays', ['id' => $row->id]).'"class=dit btn btn-primay btn-sm>View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])->make(true);


        }
        return view('users.users.showAllActivity');
    }
}
