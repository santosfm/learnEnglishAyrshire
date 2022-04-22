<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //public function index()
    public function blog()
    {
        //$posts = Post::all(); 
        $posts = Post::paginate(5);
                
        return view('posts.blog', compact('posts'));
    }

    //home page
    public function index()
    {
        return view('home');
    }

    public function faq()
    {
        return view('faq');
    }

    public function cv()
    {
        return view('cv.cv');
    }

    public function contact()
    {
        return view('contact');
    }

    public function create()
    {        
        return view('posts.create');
    }

    public function store(Request $request)
    {

        //if user has uploaded an image
        if ($request->has('image')) {

            $request->validate([
                'title' => 'required|max:180|min:3',
                'body' => 'required|min:5|max:650',
                'image' => 'image|mimes:jpg,bmp,png,jpeg,gif,svg|max:2048'
            ]);

            //$newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
            $newImageName = $request->title . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);

            Post::create([
                'title' => request('title'),
                'body' => request('body'),
                'image_path' => $newImageName,
                'published_at' => request('published_at'),
                'created_at' => request('created_at'),
                'user_id' => auth()->id()
            ]);

        //user has not uploaded an image
        } else {
            $request->validate([
                'title' => 'required|max:180|min:3',
                'body' => 'required|min:5|max:650'
               // 'image' => 'image|mimes:jpg,bmp,png,jpeg,gif,svg|max:2048'
            ]);

            //$newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
            $newImagePlaceholder = '/images/computerLearning.png';
            //$request->image->move(public_path('images'), $newImagePlaceholder);

            Post::create([
                'title' => request('title'),
                'body' => request('body'),
                'image_path' => $newImagePlaceholder,
                'published_at' => request('published_at'),
                'created_at' => request('created_at'),
                'user_id' => auth()->id()
            ]);
        }

        //$post->save();
        return redirect('/blog')->with('success','Post created successfully!');
    }

    // public function show(Post $post)
    // {
    //     return view('posts.show', compact('post'));
    // }
    
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post, Request $request)
    {
        //if an image is present
        if ($request->has('image')) {
            
            $request->validate([
                'title' => 'required|max:180|min:3',
                'body' => 'required|min:5|max:650',
                'image' => 'image|mimes:jpg,bmp,png,jpeg,gif,svg|max:2048'
            ]);

            $newImageUpdated = $request->title . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageUpdated);

            $post->title = $request->title;
            $post->body = $request->body;
            $post->updated_at = $request->updated_at;
            $post->image_path = $newImageUpdated;
        
            //no image present
        } else {
            $request->validate([
                'title' => 'required|max:180|min:3',
                'body' => 'required|min:5|max:650'
            ]);
                
            // Post::update([
            //     'title' => $request->title,
            //     'body' => $request->body,
            //     'updated_at' => $request->updated_at,
            //     'image' => $newImageName
            // ]);
            
            $post->title = $request->title;
            $post->body = $request->body;
            $post->updated_at = $request->updated_at;
        }

        $post->save();
        return redirect('/blog')->with('success','Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/blog')->with('success','Post deleted successfully!');
    }
}