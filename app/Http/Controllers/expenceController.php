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
        $img_avatar=$request->file('avatar');
        $filename=time().'_'.$img_avatar->getclientOriginalName();
        $data_location='user_avatar';
        $img_avatar->move($data_location,$filename);
        $data=[
            'user_name'=>$user_name,
            'user_email'=>$user_email,
            'user_password'=>$user_password,
            'avatar'=>'user_avatar/'.$filename

        ];
        DB::table('user')->insert($data);
        return redirect('/login_view');
        //return view('includes/login')->with(['info'=>'Profile inserted Successfully']);
    }
    public function login_verify(Request $request)
    { 
        $request->validate([
            'user_email'=>'required',
            'user_password'=>'required'
            
        ]);
        $user_email=$request->input("user_email");
        $user_password=$request->input("user_password");
        $data=[
            
            'user_email'=>$user_email,
            'user_password'=>$user_password

        ];
        $user_data=DB::table('user')->where('user_email','=',$user_email)->get();
        foreach($user_data as $data)
        {
            $user_password_DB=$data->user_password;
        }
        if($user_password_DB==$user_password){
            return redirect('/newsfeed_view');
          // return view('includes.newsfeed');
        }
        else{
            // return redirect()->route('includes.login')->with('[info]','[Invalid login email or Password]');
            return back()->with('error','Invalid login email or Password.');
        }
    }
}
