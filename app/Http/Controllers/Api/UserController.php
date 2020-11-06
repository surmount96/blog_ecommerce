<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request){
        if (Auth::attempt($request->only(['email', 'password']))) {
            return response(["success" => true], 200);
        } else {
            return response(["success" => false], 403);
        }
        // $credentials = $request->only('email','password');

        // if(Auth::attempt($credentials)){

        // }
    }

    public function user()
    {
        return Auth::user();
    }
}
