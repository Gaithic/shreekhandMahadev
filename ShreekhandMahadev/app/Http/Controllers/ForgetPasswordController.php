<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Str;

class ForgetPasswordController extends Controller
{
    public function getEmail()
    {

       return view('auth.forget');
    }

   public function postEmail(Request $request)
    {
      $request->validate([
          'email' => 'required|email|exists:users',
      ]);

      $token = Str::random(64);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        Mail::send('auth.verify', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });

        return redirect()->back()->with('message', 'We have e-mailed your password reset link!');
    }

    public function getPassword($token) {

        return  view('auth.reset', ['token' => $token]);

     }

     public function updatePassword(Request $request)
     {

     $request->validate([
         'email' => 'required|email|exists:users',
         'password' => 'required|string|min:6|confirmed',
         'password_confirmation' => 'required',

     ]);

     $updatePassword = DB::table('password_resets')
                         ->where(['email' => $request->email, 'token' => $request->token])
                         ->first();

     if(!$updatePassword)
         return back()->withInput()->with('error', 'Invalid token!');

       $user = User::where('email', $request->email)
                   ->update(['password' => Hash::make($request->password)]);

       DB::table('password_resets')->where(['email'=> $request->email])->delete();

       return redirect('login-view')->with('success', 'Your password has been changed!');

     }

}
