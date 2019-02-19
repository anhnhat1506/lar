<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    //
    public function insert(Request $request){
        $comment= new Comment();
        $post_id = $request->get("post_id");
        $comment->title =$request->get("title");
        $comment->comment = $request->get("comment");
        $comment->by = $request->get("by");
        $comment->save();
        return redirect("post/all");
    }
}
