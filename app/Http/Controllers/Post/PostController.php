<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function list($id)
    {
        // $id = $request->route('id');
        $post = Post::join('users', 'posts.author_id', '=', 'users.id')->where('posts.id', $id)->get(['posts.*', 'users.*'])->first();
        // dd($post);
        return view('post.read', ['post' => $post]);
    }
}
