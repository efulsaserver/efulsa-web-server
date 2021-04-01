<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Model\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request){
        $post = $request->all();
        $request->merge([
            'image' => 'none image'
        ]);
        Post::create($post);
        return back()->with('success', 'Berhasil !');
    }
}
