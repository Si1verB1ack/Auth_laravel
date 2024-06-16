<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(){
        $auth = Auth::user();
        return view('user.profile', compact('auth'));
    }

    //create function uplaod to deal with the image upload with javascript from profile.blade.php
    public function upload(Request $request){
        //uplaod  the image upload with javascript from profile.blade.php
        if($request->hasFile('image')){
            $photo = $request->file('image');

            $fileName = time().'_'. Auth::user()->id.".".$photo->getClientOriginalExtension();
            $path = $request->file('image')->move(public_path('profile'),$fileName);
            $user = User::find(Auth::user()->id);
            $user->profile = $fileName;
            $user->save();
            return response()->json([
                'message' => 'image has been uploaded to '.$fileName,
            ],200);
        }else{
            return response()->json([
                'message' => 'somthing is wrong',
            ],400);
        }
    }
}
