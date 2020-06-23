<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function __construct()
    {
        // $this->middleware('CheckEmpty'); // To check all in the grop
    }

    public function index()
    {
        return view('Post.index');
    }

    public function getAllPosts()
    {
        // $posts =  DB::table('posts')->paginate(2);
        // $posts =  Post::paginate(5);

        $posts = Post::query();

        if(request()->has('active')){
            $posts->where('active',request('active'));
        }

        if(request()->has('sort')){
            $posts->where('title',request('sort'));
        }

        return view('Post.all', ['posts' => $posts]);
    }

    public function getOnePost($id)
    {
        $post = Post::find($id);
        return view('Post.one', ['post' => $post]);
    }



    public function updatePost(Request $request)
    {
        $post = Post::find($request->id);
        $post->title =  $request->title;
        $post->description =  $request->description;
        $post->save();
        return redirect(route('getAllPosts'));
    }

    public function addPost()
    {
        return view('Post.add');
    }

    public function addPostLink(Request $request)
    {
        // var_dump($request -> all());
        // $request -> input('user_name'); or $name = $request['name']
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect(route('getAllPosts'));
    }

    public function updatePostLink($id)
    {
        $post = Post::find($id);
        return view('Post.update', ['post' => $post]);
    }

    public function deletePost(Request $request)
    {
        $post = Post::find($request['id']);
        $post->delete();
        return redirect(route('getAllPosts'));
    }
}
