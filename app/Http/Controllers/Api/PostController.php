<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

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
        $input['video'] = '';
        $input['image'] = '';
   
        if($request->hasFile('video')){
            
            $disk = "public";
            $ext = $request->file('video')->getClientOriginalExtension();
            $path = 'post-video-'.time().'.'.$ext;
            Storage::disk($disk)->putFileAs('video',$request->file('video'),$path);
            
            $input['video'] = $path;
        }

        if($request->hasFile('image')){
            $disk = "public";
            $ext = $request->file('image')->getClientOriginalExtension();
            $path = 'post-image-'.time().'.'.$ext;
            Storage::disk($disk)->putFileAs('photo',$request->file('image'),$path);
            
            $input['image'] = $path;
        }
        
        Post::create($input);
        return response()->json(['status' => 200,'message' => 'Successful']);
    }

    public function showBlog()
    {
        $latest = Post::latest()->first();
        $oldest = Post::oldest()->get();
        $random = Post::inRandomOrder()->limit(3)->get();
        return view('base.blog',compact('latest','oldest','random'));
    }

    public function show($id)
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
