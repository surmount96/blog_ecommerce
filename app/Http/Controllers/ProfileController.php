<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function index()
    {
        return view('base.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'message' => 'required',
        ]);
        Contact::create($request->all());
        $message = "Successfully created";
        return back()->with('message',$message);
    }

    public function profile()
    {
        $user = User::where('id',request()->id)->first();
        $user->name = request()->name;
        $user->email = request()->email;
        $user->password = bcrypt(request()->password);
        $user->save();
        return response()->json(['status'=> 201, 'message' => 'successfully update']);
    }
}
