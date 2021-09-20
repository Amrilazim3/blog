<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function store(Post $post)
    {
        //validation the data
        request()->validate([
            'body' => 'required'
        ]);

        // store the data
        $post->comments()->create([ // this way we automatically set the post_id due the way we call the create()
            'user_id' => auth()->id(),
            'body' => request('body')
        ]);

        return back();
    }
}
