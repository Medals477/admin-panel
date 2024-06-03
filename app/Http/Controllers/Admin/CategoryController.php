<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>  'required',
            'slug'          =>  'required|unique:categories',
            'status'        =>  'required',
        ]);
        $data = $request->all();
        $data['slug'] = Str::slug($request->slug);
        Category::create($data);
        return redirect(route('category.index'))->with('success', "Category successfully created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = Crypt::decrypt($id);
        $category = Category::find($id);
        return view('admin.category.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = Crypt::decrypt($id);
        $category = Category::find($id);

        $request -> validate([
            'name'       =>  'required',
            'slug'       =>  'required|unique:categories,slug,'.$id,
            'status'     =>  'required',
        ]);

        $category->name                   =      $request->name;
        $category->slug                   =      Str::slug($request->slug);
        $category->status                 =      $request->status;
        $category->description            =      $request->description;
        $category->meta_title             =      $request->meta_title;
        $category->meta_keywords          =      $request->meta_keywords;
        $category->meta_description       =      $request->meta_description;
        $category->save();

        return redirect()->back()->with('success', 'Record has been successfully updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
