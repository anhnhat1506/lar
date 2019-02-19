<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostController extends Controller
{
    public function all(){
        //lay tat ca comment va post
        $all_post = Post::all();
        return View('Post.all',[
            'data'=>$all_post
        ]);
    }
    public function insert_comment(){
        //lay ra post co san
        $post2 = Post::find(2);

        //tao comment cua post
        $new_comment = new Comment();
        $new_comment->title='new comment title';
        $new_comment->content='new comment content';
        $new_comment->by='mr';

        $post2->comments()->save($new_comment);

    }
    public function insert_comment2(){
        //tao comment cua post
        $new_comment = new Comment();
        $new_comment->title='new comment title';
        $new_comment->content='new comment content';
        $new_comment->by='mr';
        $new_comment->post_id=2;
        $new_comment->save();

    }
    public function insert_post_and_comments(){

        $post3 = new Post();
        $post3->title = 'title post 3';
        $post3->content = 'content post 3';
        $post3->save();
        //da co id cua post 3

        //tao comment cua post
        $cmt_arr = [];
        for($i=0;$i<5;$i++){
            //tao 5 phan tu comment 0-4
            $new_comment = new Comment();
            $new_comment->title='new comment title post '.($i+1);
            $new_comment->content='new comment content  post '.($i+1);
            $new_comment->by='mr  post '.($i+1);
            $cmt_arr[] = $new_comment;    
        }
      
        $post3->comments()->saveMany($cmt_arr);     
    }
    public function add(Request $request, $id){     
        $post= Post::find($id);
        $data=[
            'post'=>$post
        ];
        return View('Post.add',$data);
    }
    public function save_comment(Request $request){ 
        $save_comment= new Comment();      
        $save_comment->title = $request->get("title");
        $save_comment->content = $request->get("content");
        $save_comment->by = $request->get("by");
        $save_comment->post_id = $request->get("post_id");
        $save_comment->save();          
        return redirect("post/all");

    }
}
