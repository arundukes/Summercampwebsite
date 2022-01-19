<?php

namespace App\Http\Controllers;
use  App\Models\registeradmin;
use  App\Models\activity;
use  App\Models\registeruser;

use Illuminate\Http\Request;
use Session;
use Mail;

class userController extends Controller
{
    //
    public function index(){
        return view('user.about');
    }

    public function adminlogin(){
        return view('admin.adminlogin');
    }

    public function userlogin(){
        return view('user.userlogin');
    }

   
    public function admindash(){
        return view('admin.admindash');
    }

    public function userdash(){
        return view('user.userdash');
    }


    public function userdetail(){
        return view('admin.userdetail');
    }


    public function activities(){
        return view('admin.activities');
    }

    public function user(){
        $data['result']=registeruser::all();
        return view('admin.user',$data);
    }

    public function register(){
        return view('user.register');
    }

    public function mail(){
        return view('user.mail');
    }



   public function adminlogins(Request $req){

    $email=$req->input('email');
    $pass=$req->input('password');
    $data=registeradmin::where('email',$email)->where('password',$pass)->first(); 
   
    if(isset($data)) {
        Session::put('s_id',$data->id);
        return redirect('admindash');
    }
    else {
        return redirect('adminlogin')->with('error','invalid email or password');
    }

    }



    public function userlogins(Request $req){

        $email=$req->input('email');
        $pass=$req->input('password');
        $data=registeruser::where('email',$email)->where('password',$pass)->first(); 
       
        if(isset($data)) {
            Session::put('s_id',$data->id);
            return redirect('userdash');
        }
        else {
            return redirect('userlogin')->with('error','invalid email or password');
        }
    
        }

      public function store(Request $req){
    
        $obj = new activity;
        $obj->name=$req->input('name');
        $obj->age=$req->input('age');
        $files=$req->file('files');
        $filename=$files->getClientOriginalName();
        $files->move(public_path().'/uploads',$filename);
        $obj->file=$filename;
        $obj->save();
        return redirect('activities');
          }


    public function registeruser(Request $req){
    
    $obj = new registeruser;
    $parentname=$req->input('parentname');
    $email=$req->input('email');
    $obj->parentname=$parentname;
    $obj->kidsname=$req->input('kidsname');
    $obj->email=$email;
    $obj->password=$req->input('password');
    $obj->gender=$req->input('gender');
    $interest=$req->input('sub');
    $obj->interest=implode(',',$interest);
    $obj->age=$req->input('age');
    $obj->bio=$req->input('bio');
    $obj->save();
    $val=['parentname'=>$parentname,
    'messg'=>'welcome to summer camp'];
    $user['to']=$email;
    Mail::send('mail',$val,function($msg) use($user){ 
        $msg->to($user['to']);
        $msg->subject('welcome to summer camp');

      });
     return view('user.userlogin'); 
      }




      public function logout(Request $request) {
        $request->session()->forget('s_id');
        return redirect('adminlogin');
      }

}
