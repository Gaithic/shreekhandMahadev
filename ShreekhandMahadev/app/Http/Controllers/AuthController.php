<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterForm;
use App\Mail\RegistrationMail;
use App\Models\District;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function Index(){
        return view('layout.app');
    }

    public function mainVIew(){
        return view('pages.index');
    }



    public function registerView(){
        $state =  State::all();
        $districts  = District::all();
        $state_id = State::where('id',0)->get();
        $dist_id  = District::where('id', 0)->get();

      return view('auth.register',[
            'state' => $state_id,
            'state' => $state,
            'districts' => $districts,
            'districts' => $dist_id,
           
        ]);

    }


    public function getDistrict(Request $request)
    {
        $districts = State::where('id', '=', $request->state_id)
                              ->with('districts')
                              ->get();
        return response()->json([
        'districts' => $districts,
     
    ]);
}



    public function saveRegisterUser(RegisterForm $request){
        if($request->hasFile('idProof')){
            $file = $request->file('idProof');
            $fileName = $file->getClientOriginalName();
            $filepath = pathinfo($fileName, PATHINFO_FILENAME);
            $fileExtension = $request->file('idProof')->getClientOriginalExtension();
            $fileNAmeTotore = $filepath.'-'.time().'.'.$fileExtension;
            $path = $file->move(public_path('/asset/images'), $fileNAmeTotore);
            // dd($path);
        }else{
            $fileNAmeTotore = 'noImage.jpg';
        }
        $user =new User();
        $user->name = $request->name;
        $user->fatherOrHusband = $request->fatherOrHusband;
        $user->fatherOrHusbandContact = $request->fatherOrHusbandContact;
        $user->date_of_birth = $request->date_of_birth;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->gender = $request->gender;
        $user->state_id = $request->state_id;
        $user->district_id = $request->district_id;
        $user->address = $request->address;
        $user->dateOfReporting = $request->dateOfReporting;
        $user->nameOfRelative = $request->nameOfRelative;
        $user->ContactOfNearRelative = $request->ContactOfNearRelative;
        $user->addharNumber = $request->addharNumber;
        $user->idProof = $fileNAmeTotore;
        $user->terms = 1;
        $user->password = 0;
        $res  = $user->save();
        if($res){
            return redirect()->intended(route('login'))->with('success', "Your Application has been registered. </br> Kindly Download Form Your Mail and registered Mobile Number");
            Mail::to($res['email'])->send(new RegistrationMail($user->email));
        }
    }

    public function loginView(){
        return view('auth.login');
    }
}
