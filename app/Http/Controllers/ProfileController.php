<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
          $user=User::where('id',auth()->user()->id)->get();
        return view('systemUser/profile/profile' ,["user"=>$user]);
    }

    public function changePassword(Request $request)
    {

        try {
            $request->validate([
                'password' => 'required|min:7'
            ]);
            $userId = auth()->user()->id;
            if (Hash::check($request->post('previous_password'), auth()->user()->password)) {
                if (strcmp($request->post('password'), $request->post('rewrite_password'))) {
                    User::where('id', $userId)->update([
                        'password' => Hash::make($request->post('password')),
                    ]);
                    $request->session()->flash('msg_pass', "Password updated successfully");
                    return back();
                }
                $request->session()->flash('msg_fail', "Invalid data inputs");
                return back();
            }
            $request->session()->flash('msg_fail', "Invalid data inputs");
            return back();
        }
        catch (\Exception $e){
            $request->session()->flash('msg_fail', "Invalid data inputs");

            return back();
        }
    }


    public function deleteAccount(Request $request){

        "delete account";
    }

}
