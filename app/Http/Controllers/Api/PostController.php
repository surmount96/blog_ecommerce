<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts =  Post::latest()->get();
        return response()->json(['status' => 201, 'posts' => $posts]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($input['title'], '-');
        $input['video'] = 'welcome';
        $input['image'] = 'image';
        Post::create($input);
        return response()->json(['status' => 200,'message' => 'Successful']);
    }

    public function show()
    {
        //
    }

    public function registeredUsers()
    {
        $users = User::select('isAdmin')->groupBy('isAdmin')->having('isAdmin','!=',1)->get();
        return $users->count();
    }

    public function users()
    {
        $users = User::where('isAdmin','!=',1)->paginate(10);
        return response()->json(['status' => 200, 'users' => $users]);
    }
}
