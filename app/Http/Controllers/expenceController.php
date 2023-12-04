<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class expenceController extends Controller
{
    public function myexpense_view():View{
        if (Cookie::has('user_email'))
        {
        $cookieValue = Cookie::get('user_email');
        $user_data=DB::table('user')->where('user_email','=',$cookieValue)->get();
            foreach($user_data as $data)
            {
            $user_name=$data->user_name;
            $avatar=$data->avatar;
            $user_id=$data->user_id;
            }
            $data=[
                'user_name'=>$user_name,
                'user_email'=>$cookieValue,
                'avatar'=>$avatar
                
    
            ];
        return view('includes.myexpense')->with(['data'=>$data]);;
        }
        else{
            return view('includes.login');
        }
    }
    public function newsfeed_view():View
    {
        if (Cookie::has('user_email')){
            $cookieValue = Cookie::get('user_email');
            $user_data=DB::table('user')->where('user_email','=',$cookieValue)->get();
            foreach($user_data as $data)
            {
            $user_name=$data->user_name;
            $avatar=$data->avatar;
            }
            $data=[
                'user_name'=>$user_name,
                'user_email'=>$cookieValue,
                'avatar'=>$avatar
                
    
            ];
            return view('includes.newsfeed')->with(['data'=>$data]);
        }
        else{
            return view('includes.login');
        }
    
    }
    public function other_expense_view():View
    {   if (Cookie::has('user_email'))
        {
        $cookieValue = Cookie::get('user_email');
        $user_data=DB::table('user')->where('user_email','=',$cookieValue)->get();
            foreach($user_data as $data)
            {
            $user_name=$data->user_name;
            $avatar=$data->avatar;
            }
            $data=[
                'user_name'=>$user_name,
                'user_email'=>$cookieValue,
                'avatar'=>$avatar
                
    
            ];
        
        return view('includes.other_expense')->with(['data'=>$data]);;
        }
        else{
            return view('includes.login');
        }


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
        if($user_password_DB==$user_password)
        {
            Cookie::queue('user_email', $user_email, 1440);
            //Cookie::make('user_password', $user_password, 1440);
            return redirect('/newsfeed_view');
          // return view('includes.newsfeed');
        }
        else{
            // return redirect()->route('includes.login')->with('[info]','[Invalid login email or Password]');
            return back()->with('error','Invalid login email or Password.');
        }
    }

    public function logout_user()
    {
        if (Cookie::has('user_email'))
        {
            Cookie::expire('user_email');
            return redirect('/login_view');
        }

    }

    public function insert_product(Request $request)
    {
            $name=$request->input('name');
            $quantity=$request->input('quantity');
            $weight=$request->input('weight');
            $price=$request->input('price');
            $Total_amount=$quantity*$price;
            $data=[
                'Item_name'=>$name,
                'Item_quantity'=>$quantity,
                'Item_unit'=>$weight,
                'Item_price'=>$price,
                'Total_amount'=>$Total_amount
            ];
            DB::table('product_data')->insert($data);
            return response()->json(['active'=>1]);
    }

    public function view_data()
    {
        $p_data=DB::table('product_data')->get();
        return response()->json(['data'=>$p_data]);
        //return view('ajax.todo.view')->with(['all_data'=>$p_data]);
    }

    public function edit_data(Request $request)
    {      $id=$request->input('item_id');
        $info=DB::table('product_data')->where('Sr_no','=',$id)->get();
         if(DB::table('product_data')->where('Sr_no','=',$id)->get()->count()==1)
         {
             return response()->json(['data'=>$info]);
         }
    }

    public function update_product(Request $request)
    {
        $Product_id=$request->input('Product_id');
            $quantity=$request->input('quantity');
            //$weight=$request->input('weight');
            $price=$request->input('price');
            $Total_amount=$quantity*$price;
            $data=[
                
                'Item_quantity'=>$quantity,
                'Item_price'=>$price,
                'Total_amount'=>$Total_amount
            ];
           // DB::table('product_data')->insert($data)->where('Sr_no'=>$Product_id);
            $affectedRows=DB::table('product_data')
            ->where('Sr_no',$Product_id)
            ->update($data);
            if(DB::table('product_data')->where('Sr_no','=',$Product_id)->get()->count()==1)
            {
                return response()->json(['active'=>1]);
            }
            //return response()->json(['active'=>1]);
    }


    public function delete_product(Request $request)
        {
            $Product_id=$request->input('product_id');
            $affectedRows=DB::table('product_data')->where('Sr_no',$Product_id)->delete();
            
            if($affectedRows>0)
            {
                return response()->json(['active'=>1]);
            }
        }
}

        
