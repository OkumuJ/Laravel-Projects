<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function index()
    {
        return view("blog.index");
    }
    */

    public function index()
    {
        $post = Post::all();
        return view('blog.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("blog.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       /*$allEntries = $request -> all();
       dd($allEntries);
       */

        $request ->validate([
            'title' => "required",
            'imagep' => 'required|image|mimes:jpg,png,jpeg|max:8048',
            'body' => "required"
        ]);
        $title = $request->input('title');
        $slug = Str::slug($title,'-');
        $body = $request->input('body');


        //image upload
        $imagePath = 'storage/' . $request->file('imagep')->store('postImage','public');

        //post and save

        $post = new Post();
        $post->title = $title;
        $post->slug = $slug;
        $post->body = $body;
        $post->imagePath = $imagePath;
        $post->save();

        return redirect()->back()->with('status', 'Blog Post Successfully Saved');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
