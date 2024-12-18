<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sponsor;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {

        $validatedData = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if ($validatedData->fails()){
            return redirect()->back()->withErrors($validatedData)->withInput();
        }

        $admin = Admin::where('email', $request->email)->first();

        if ($admin){
            if(Hash::check($request->password, $admin->password)){
                Auth::guard('admin')->login($admin);
                return redirect()->intended('admin');
            }
        } else {
            $sponsor = Sponsor::where('email', $request->email)->first();

            if ($sponsor){
                // dd('Sponsor found');
                if(Hash::check($request->password, $sponsor->password)){
                    Auth::guard('sponsor')->login($sponsor);
                    // Auth::login($sponsor);
                    // return redirect()->intended('home');
                    return redirect()->intended('inbox');
                }
            } else {
                $user = User::where('email', $request->email)->first();

                if ($user){
                    // dd('User found');
                    if(Hash::check($request->password, $user->password)){
                        Auth::guard()->login($user);
                        // Auth::login($user);
                        // dd(Auth::guard('user')->check(), Auth::guard('sponsor')->check());
                        return redirect()->intended('home');
                    }
                }
            }
        }
        return redirect()->back()->with('error', '* Invalid email or password...')->withInput()->with('redirect', session()->forget('url.intended'));
    }

    public function logout()
    {
        if(Auth::guard('sponsor')->check()){
            $user = Auth::guard('sponsor')->user();
            $user->touch();
            Auth::guard('sponsor')->logout();
            return redirect()->route('landing');
        } else if (Auth::guard()->check()){
            $user = Auth::guard()->user();
            $user->touch();
            Auth::guard()->logout();
            return redirect()->route('landing');
        } else if (Auth::guard('admin')->check()){
            $user = Auth::guard('admin')->user();
            $user->touch();
            Auth::guard('admin')->logout();
            return redirect()->route('landing');
        }
    }
}
