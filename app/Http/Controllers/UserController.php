<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use Image;

class UserController extends Controller
{
    public function profile(){
        return view('profile',array('user'=>Auth::user()));
    }

    public function update_avatar(Request $request){
     if($request->hasFile('avatar')){
       $avatar = $request->file('avatar');
       $filename = time().'.'.$avatar->getClientOriginalExtension();
       Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));
       //enregistrer dans la DB
       $user = Auth::user();
       $user->avatar= $filename;
       $user->save();
     }

     return view('profile', array('user'=>Auth::user()));
   }

    
    public function update_slide_1(Request $request) {

        if($request->hasFile('slide_1')){

            $slide_1 = $request->file('slide_1');

            $filename = time() . '.' . $slide_1->
                getCLientOriginalExtension();

            Image::make($slide_1)->resize(300,300)->save( public_path('/uploads/slides/' . $filename));

            //enregistrer bdd
            $user = Auth::user();
            $user->slide_1 = $filename;
            $user->save();
        }
        return view('profile', array('user'=>Auth::user()));
    }

    public function update_slide_2(Request $request) {

        if($request->hasFile('slide_2')){

            $slide_2 = $request->file('slide_2');

            $filename = time() . '.' . $slide_2->
                getCLientOriginalExtension();

            Image::make($slide_2)->resize(300,300)->save( public_path('/uploads/slides/' . $filename));

            //enregistrer bdd
            $user = Auth::user();
            $user->slide_2 = $filename;
            $user->save();
        }
        return view('profile', array('user'=>Auth::user()));
    }

        public function update_slide_3(Request $request) {

        if($request->hasFile('slide_3')){

            $slide_3 = $request->file('slide_3');

            $filename = time() . '.' . $slide_3->
                getCLientOriginalExtension();

            Image::make($slide_3)->resize(300,300)->save( public_path('/uploads/slides/' . $filename));

            //enregistrer bdd
            $user = Auth::user();
            $user->slide_3 = $filename;
            $user->save();
        }
        return view('profile', array('user'=>Auth::user()));
    }

}