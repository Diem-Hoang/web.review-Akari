<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CtvComment;
use App\Models\Post;
use App\Models\CtvPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //
    public function postComment($id, Request $request)
    {
        $post = Post::find($id);
        $post_id = $post->id;
        $comment = new Comment;
        $comment->post_id = $post_id;
        $comment->user_id = Auth::user()->id;
        $comment->content = $request->content;
        $comment->save();
        
        return back()->with('メッセージ', 'コメントを正常に送信しました');
    }
    public function ctvpostComment($id, Request $request)
    {
        $post = CtvPost::find($id);
        $post_id = $post->id;
        $comment = new CtvComment;
        $comment->post_id = $post_id;
        $comment->user_id = Auth::user()->id;
        $comment->content = $request->content;
        $comment->save();
        
        return back()->with('メッセージ', 'コメントを正常に送信しました');
    }
}
