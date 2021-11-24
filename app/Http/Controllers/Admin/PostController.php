<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\CtvPost;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $posts = Post::join('categories','posts.category_id','=','categories.id')->get(['posts.*','categories.name AS category_name']);
        return view('admin.posts.list',['posts' => $posts]);
    }
    public function ctvindex()
    {
        
        $posts = Post::join('categories','posts.category_id','=','categories.id')->get(['posts.*','categories.name AS category_name']);
        return view('admin.posts.ctvlist',['posts' => $posts]);
    }

    public static function milliseconds() {
        $mt = explode(' ', microtime());
        return ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
    }

    public static function createName($name, $extension) {
        return $name.'_'.PostController::milliseconds().'.'.$extension;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $rules = [
            'category' => ['required'],
            'name' => ['required'],
            'content' => ['required'],
            'type' => ['required'],
            'image' => ['required']
        ];
        $validator = \Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else {
            if ($request->hasFile('image')) {
                if ($request->file('image')->isValid()) {
                    $extension = $request->image->extension();
                    $name = PostController::createName(str_slug($request->input('name')),$extension);
                    $request->image->storeAs('/public/images/posts', $name);
                    Post::create([
                        'category_id' => $request->input('category'),
                        'name' => $request->input('name'),
                        'content' => $request->input('content'),
                        'count_like' => $request->input('like'),
                        'view' => $request->input('view'),
                        'image' => $name,
                        'content' => $request->input('content'),
                        'location' => $request->input('location'),
                        'price' => $request->input('price'),
                        'count_favorite' => $request->input('favorite'),
                        'type' => $request->input('type')
                    ]);
                    return redirect()->route('post.list')->with("success","Add successfully.");
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::join('categories','posts.category_id','=','categories.id')->where('posts.id','=',$id)->get(['posts.*','categories.name AS category_name'])->first();
        return view('admin.posts.show',['post' => $post]);
    }
    public function ctvshow($id)
    {
        $post = CtvPost::where('ctv_posts.id','=',$id)->get()->first();
        return view('admin.posts.ctvshow',['post' => $post]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        return view('admin.posts.edit',['categories' => $categories, 'post' => $post]);
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
        $data = $request->all();
        $rules = [
            'category' => ['required'],
            'name' => ['required'],
            'content' => ['required'],
            'type' => ['required'],
            'image' => ['required']
        ];
        $validator = \Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else {
            $post = Post::find($id);
            $post->category_id = $data['category'];
            $post->name = $data['name'];
            $post->content = $data['content'];
            $post->count_like = $data['like'];
            $post->view = $data['view'];
            $post->location = $data['location'];
            $post->price = $data['price'];
            $post->count_favorite = $data['favorite'];
            $post->type = $data['type'];
            $post->status = 0;
            if ($request->hasFile('image')) {
                if ($request->file('image')->isValid()) {
                    unlink(str_replace('\\', '/', public_path()).'/storage/images/posts/' . $post['image']);
                    $extension = $request->image->extension();
                    $name = PostController::createName(str_slug($request->input('name')),$extension);
                    $request->image->storeAs('/public/images/posts', $name);
                    $post->image = $name;
                }
            }
            $post->save();
            return redirect()->route('post.list')->with("success","Update successfully.");
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        unlink(str_replace('\\', '/', public_path()).'/storage/images/posts/' . $post['image']);
        $post->delete();
        return redirect()->route('post.list')->with("success","Delete successfully.");
    }

    /**
     * Approve post
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function accept($id)
    {
        Post::where('id',$id)->update(['status' => 1]);
        return redirect()->route('post.list')->with("success","Approve successfully.");
    }
}
