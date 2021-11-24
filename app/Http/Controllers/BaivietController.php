<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CtvPost;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class BaivietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.create');
    }
    public static function milliseconds() {
        $mt = explode(' ', microtime());
        return ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
    }
    public static function createName($name, $extension) {
        return $name.'_'.BaivietController::milliseconds().'.'.$extension;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $extension = $request->image->extension();
                    $nameimg = BaivietController::createName(str_slug($request->input('name')),$extension);
                    $request->image->storeAs('/public/images/posts', $nameimg);
    $data = new CtvPost;
    $data->name=$request->name;
    $data->title=$request->title;
    $data->adress=$request->adress;
    $data->theme=$request->theme;
    $data->type=$request->type;
    $data->price=$request->price;
    $data->location=$request->location;
    $data->content=$request->content;
    $data->image=$nameimg;
    $data->category_id=$request->category;
    $data->save();
    return view('web.postgallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = CtvPost::find($id);
        return view('web.edit',['post' => $post]);
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
            'image' => ['required']
        ];
        $validator = \Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $extension = $request->image->extension();
                    $nameimg = BaivietController::createName(str_slug($request->input('name')),$extension);
                    $request->image->storeAs('/public/images/posts', $nameimg);
        $data = CtvPost::find($id);
        $data->name=$request->name;
        $data->title=$request->title;
        $data->adress=$request->adress;
        $data->theme=$request->theme;
        $data->type=$request->type;
        $data->price=$request->price;
        $data->location=$request->location;
        $data->content=$request->content;
        $data->image=$nameimg;
        $data->save();
        return view('web.postgallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = CtvPost::find($id);
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
        CtvPost::where('id',$id)->update(['status' => 1]);
        return redirect()->route('post.list')->with("success","Approve successfully.");
    }
}
