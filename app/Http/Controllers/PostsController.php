<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');    
    }
    public function index(User $user){
        $users = User::where('id', '!=', auth()->user()->id)->paginate(4);
        
        $following = auth()->user()->following()->pluck('profiles.user_id');
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        $posts = Post::whereIn('user_id', $following)->with('user')->latest()->get();
        
        return view('posts.index', compact('users', 'following','follows', 'posts'));
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);


        return redirect('/profile/'.auth()->user()->id);
    }
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }
    public function explore(){
        $posts = Post::paginate(18);
        return view('posts.explore', compact('posts'));
    }
}
