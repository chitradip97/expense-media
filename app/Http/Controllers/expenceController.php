<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class expenceController extends Controller
{
    public function myexpense_view():View{
        return view('includes.myexpense');
    }
    public function newsfeed_view():View{
    return view('includes.newsfeed');
    }
    public function other_expense_view():View{
    return view('includes.other_expense');
    }
    public function login_view():View{
        return view('includes.login');
    }
    public function register_view():View{
        return view('includes.register');
    }

    public function register_submit(Request $request){
        $request->validate([
            'user_name'=>'required|min:3|max:30',
            'user_email'=>'required',
            'user_password'=>'required'
            
        ]);
        $user_name=$request->input("user_name");
        $user_email=$request->input("user_email");
        $user_password=$request->input("user_password");
        $data=[
            'user_name'=>$user_name,
            'user_email'=>$user_email,
            'user_password'=>$user_password

        ];
        DB::table('user')->insert($data);
        return view('includes/login')->with(['info'=>'Profile inserted Successfully']);
    }
}
