<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function admin(){
        return view('admin/admin');
    }  
    public function loginadmin(){
        return view('admin/loginadmin');
    }  
    public function postLoginAdmin(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'role'=>1]))
        {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with('error','Wrong account or password information');
    }  
}
