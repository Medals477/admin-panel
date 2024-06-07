<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return $this->getName("Ajeeet");
        $blog = Blog::latest('id')->get();
        return view('admin.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.blog.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
             'category_id'     => 'required',
             'title'           => 'required',
             'slug'            => 'required|unique:blogs',
             'status'          => 'required',
             'meta_title'      => 'required',
             'meta_keywords'   => 'required',
        ]);
           $data = $request->all();
           $data['slug'] = Str::slug($request->slug);
           Blog::create($data);
           return redirect(route('blog.index'))->with('success', "Blog Successfully Created!");
        // $blog = new Blog();
        //     $blog->category_id           =   $request->category_id;
        //     $blog->title                 =   $request->title;
        //     $blog->slug                  =   Str::slug($request->slug);
        //     $blog->description           =   $request->description;
        //     $blog->status                =   $request->status;
        //     $blog->meta_title            =   $request->meta_title;
        //     $blog->meta_keywords         =   $request->meta_keywords;
        //     $blog->meta_description      =   $request->meta_description;
        // $blog->save();
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
        $blog = Blog::find($id);
        $category = Category::all();
        return view('admin.blog.edit',['blog'=>$blog,],compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = Crypt::decrypt($id);
        $blog = Blog::find($id);
        $request->validate([
            'category_id'     => 'required',
            'title'           => 'required',
            'slug'            => 'required|unique:blogs,slug,'.$id,
            'status'          => 'required',
            'meta_title'      => 'required',
            'meta_keywords'   => 'required',
       ]);
          $data = $request->all();
          $data['slug'] = Str::slug($request->slug);
          $blog->update($data);
        return redirect()->back()->with('success', 'Record has been successfully updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Crypt::decrypt($id);
        Blog::destroy($id);
        return redirect()->back()->with('success', 'Record Has Been Deleted Successfully!');
    }

    protected function getName($name)
    {
        return $name;
    }
}
