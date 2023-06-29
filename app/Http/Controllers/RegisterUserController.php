<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    public function index(){

        return route('/register');
    }

    public function store(Request $request){

        $request->old('username');
        $request->old('email');
       try{
           $rule=$request->validate([
            'username'=>'required',
             'email'=>'required|unique:users',
             'password'=>'required|min:7'
        ]);
       if($rule){
           User::create([
               'name'=>$request->post('username'),
               'email'=>$request->post('email'),
               'password'=>Hash::make($request->post('password'))
           ]);
           $request->session()->flash('msg_pass','You are successfully registered');
           return redirect('login');
              }
       }
       catch (\Exception $e){
           $request->session()->flash('msg_fail',"Your registration fail please check and register again");
           return back();
       }
    }

    public function adminRegistration(Request $request){

    }



    public function completeRegistration(Request $request){
//        $request->validate([
//            ''
//        ]);
        User::where('id',auth()->user()->id)->update([
         'phone_number'=>$request->post('phone_number'),
            'collage_id'=>$request->post('collage_id'),
            'course_id'=>$request->post('course_id'),
        ]);
         $request->session()->flash('msg_pass',"you are successfully submit your suggestion, will be accessed soon");
        return view('systemUser/suggestionBox/composeSuggestion');


    }


    public function completeRegistrationPage(Request $request){
        if(auth()->user()->collage_id==null){
            $request->session()->flash('msg_info',"You have to fill the form below and you will be allowed to  submit your suggestions
                                       the submission is only once");
            return view('systemUser/suggestionBox/completeRegistration/completeRegistration');
        }
        else if(auth()->user()->collage_id){
            $request->session()->flash('msg_info',"welcome to DSM ");
            return view('systemUser/suggestionBox/composeSuggestion');
        }
    }
}
