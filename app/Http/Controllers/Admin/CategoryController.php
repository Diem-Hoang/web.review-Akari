<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ParentCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::join('parent_categories','categories.parent_category_id','=','parent_categories.id')->get(['categories.*','parent_categories.name AS parent_category_name']);
        return view('admin.categories.list',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_categories = ParentCategory::all();
        return view('admin.categories.create',['parent_categories' => $parent_categories]);
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
            'name' => ['required'],
            'parent_category' => ['required']
        ];
        $validator = \Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else {
            Category::create([
                'name' => $data['name'],
                'parent_category_id' => $data['parent_category']
            ]);
            return redirect()->route('category.list')->with('success','Add successfully');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $parent_categories = ParentCategory::all();
        return view('admin.categories.edit',['category' => $category, 'parent_categories' => $parent_categories]);
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
            'name' => ['required'],
            'parent_category' => ['required']
        ];
        $validator = \Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else {
            $category = Category::find($id);
            $category->parent_category_id = $data['parent_category'];
            $category->name = $data['name'];
            $category->save();
            return redirect()->route('category.list')->with('success','Update successfully');
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
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('success','Delete successfully');
    }
}
