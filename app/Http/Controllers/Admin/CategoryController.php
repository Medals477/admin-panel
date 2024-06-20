<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

=======
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;


>>>>>>> 531c3e6a7b3b5f02bc6000927e8f4562dc2afd3d
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::with('blog')->get();
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
<<<<<<< HEAD
            'name'                => 'required',
            'slug'                => 'required|unique:categories',
            'status'              => 'required',
=======
            'name'          =>  'required',
            'slug'          =>  'required|unique:categories',
            'status'        =>  'required',
>>>>>>> 531c3e6a7b3b5f02bc6000927e8f4562dc2afd3d
        ]);
        $data = $request->all();
        $data['slug'] = Str::slug($request->slug);
        Category::create($data);
<<<<<<< HEAD
        return redirect(route('category.index'))->with('success', "Category Successfully Created");
=======
        return redirect(route('category.index'))->with('success', "Category successfully created!");
>>>>>>> 531c3e6a7b3b5f02bc6000927e8f4562dc2afd3d
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

<<<<<<< HEAD
        $request->validate([
            'name'            =>     'required',
            'slug'            =>     'required|unique:categories,slug,'.$id,
            'status'          =>     'required',
        ]);
        $data = $request->all();
        $data['slug'] = Str::slug($request->slug);
        $category->update($data);
        return redirect()->back()->with('success', 'Record Has Been Successfully Updated!');
=======
        $request -> validate([
            'name'       =>  'required',
            'slug'       =>  'required|unique:categories,slug,'.$id,
            'status'     =>  'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->slug);
        $category->update($data);
        // $category->name                   =      $request->name;
        // $category->slug                   =      Str::slug($request->slug);
        // $category->status                 =      $request->status;
        // $category->description            =      $request->description;
        // $category->meta_title             =      $request->meta_title;
        // $category->meta_keywords          =      $request->meta_keywords;
        // $category->meta_description       =      $request->meta_description;
        // $category->save();

        return redirect()->back()->with('success', 'Record has been successfully updated!');

>>>>>>> 531c3e6a7b3b5f02bc6000927e8f4562dc2afd3d
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Crypt::decrypt($id);
        Category::destroy($id);
<<<<<<< HEAD
        return redirect()->back()->with('error', 'Record Has Been Deleted Successfully!');
=======

    return redirect()->back()->with('error', 'Record Has Been Deleted Successfully!');
>>>>>>> 531c3e6a7b3b5f02bc6000927e8f4562dc2afd3d
    }
}
