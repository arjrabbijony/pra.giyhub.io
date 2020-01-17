<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class postscontroller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    function create(){
        return view('post/create');
    }
    public function show(\App\Posts $posts)
    {
        return view('post/show',compact('posts'));
    }

    function store(){
        $data=request()->validate([
            'caption'=>'required',
            'image'=>'required',
        ]);

        $imagePath = request('image')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(200, 200);
        $image->save();

        //$img = Image::make(request()->file("/storage/")->getRealPath($imagePath))->fit(1200, 1200);


        auth()->user()->posts()->create([
            'caption'=> $data['caption'],
            'image'=>$imagePath,
        ]);

        return redirect('/profile/'.auth()->user()->id);
    }














    /*
        public function __construct()
        {
            $this->middleware('auth');
        }

        public function create()
        {
            return view('post/create');
        }
        public function store()
        {
            $data = request()->validate([
                'caption' => 'required',
                'image' => ['required', 'image'],
            ]);
            $imagePath = request('image')->store('uploads', 'public');
            auth()->user()->posts()->create([
                'caption' => $data['caption'],
                'image' => $imagePath,
            ]);
            return redirect("/profile/" , auth()->user()->id);
        }
    */


}
