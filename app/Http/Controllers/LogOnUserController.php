<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LogOnUserController extends Controller
{
    //
    public function edit($id) {
        $user = User::find($id);
        return view('web.user.edit',['user' => $user]);
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->real_name = $request->input('real_name');
        $user->phone_number = $request->input('phone_number');
        $user->gender = $request->input('gender');
        $user->birth = $request->input('birth');
        $user->save();
        return view('web.user.profile' ,['user' => $user]);
    }

    public function editimg($id) {
        $user = User::find($id);
        return view('web.user.uploadimg',['user' => $user]);
    }

    public function updateimg(Request $request, $id) {
        $user = User::find($id);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('assets/web/images/', $filename);
            $user->image = $filename;
        }
        $user->save();
        return view('web.user.profile' ,['user' => $user]);
    }

    public function passwordEdit() {

    }

    public function passwordUpdate() {

    }

    public function profile($id) {
        $user = User::find($id);

        if($user){
            return view('web.user.profile' ,['user' => $user]);
        } else {
            return redirect()->back();
        }
    }
}
