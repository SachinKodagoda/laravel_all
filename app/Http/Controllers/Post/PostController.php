<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

// use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    // ctrl + shift + n search file
    // Ctrl+ E - toggle between recently used files
    // Ctrl + / - comment/uncomment a block of code
    // Ctrl + B - go to the class declaration
    // Ctrl + N - navigate to class
    // Ctrl + R - search and replace
    // Ctrl +Alt + L - reformat code
    // Alt + Enter - show intention actions and quick-fixes
    // Ctrl + Shift + Enter - complete statement

    public function __construct()
    {
        // $this->middleware('CheckEmpty'); // To check all in the grop
    }


    public function index()
    {
        //$posts =  DB::table('posts')->paginate(2);
        //$posts =  Post::paginate(5);
        //if(request()->has('active')){
        //  $posts->where('active',request('active'));
        //}
        $posts = Post::allPosts();
        return view('Post.index', compact('posts'));
    }

    public function create()
    {
        $post = new Post();
        return view('Post.create', compact('post'));
    }

    public function store(Request $request)
    {
        // var_dump($request -> all());
        // $request -> input('name'); or $name = $request['name'] or request('name')  -input to grap form elements -query to grap from query string
        // $request->query('active') or request('active')
        // $request->query('active',1) if no active then pass default
        // return redirect(route('getAllPosts'));


        // $data =  $this->validatedData();
        // $post = new Post();
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->active = 1;
        // $post->save();
        // return redirect('posts');

        $post = Post::create($this->validatedData());
        return redirect('/posts/');

    }

    public function show(Post $post)
    {
        //$post =  Post::findOrFail($id);
        return view('Post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('Post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $post->update($this->validatedData());
        return redirect('/posts/' . $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }

    protected function validatedData()
    {
        return request()->validate([
            'title' => 'required | min:5',
            'description' => 'required',
            'active' => ''
        ]);
    }


}
