<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
    public function index()
    {
        return view('profile.profile');
    }

    public function upload_photo(Request $request){

        $rules = [
            'userPhoto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
        $this->validate($request, $rules);
       
        $image = $request->file('userPhoto');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/user_photos/'), $new_name);

        $user = User::find(Auth::user()->id_user);
        $user->avatar = $new_name;
        $user->save();
        //dd($new_name);
        /** ->with('path', $new_name)*/
        return back()->with('success', 'Uploaded Correctly!');
        //return view('profile.profile', compact());

    }

    /*
        if ($request->hasFile('userPhoto')) {

            $rules = [
                'userPhoto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ];
            $this->validate($request, $rules);
            $exception = false;            
            return view('profile.profile', compact('exception'));

        } else {
            $exception = true;
            dd($exception);
            return view('profile.profile', compact('exception'));
        }
        */

        //$file = $request->file('userPhoto');
        //$messages = [];

        //$user = User::find($id);
        //dd($request->userPhoto); 
        //dd($request->hasFile('userPhoto'));

        /*
        $validatedData = $request->validate([
            'userPhoto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        dd($validatedData);
        
        if ($request->hasFile('userPhoto')) {
        $file = $request->file('userPhoto');
        $image=$file->getClientOriginalName();
        //dd($image);
        } else {
        
        }
        */ 

}
