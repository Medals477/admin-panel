<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::latest('id')->paginate(50);
        return view('admin.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.blog.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id'        =>  'required',
            'title'              =>  'required',
            'slug'               =>  'required|unique:blogs',
            'status'             =>  'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->slug);
        if($request->has('image')){
            $image = $request->image->getClientOriginalName();
            $imageName = uniqid().$image;
            $imagePath = '/upload/blog/';
            $request->image->move(public_path($imagePath), $imageName);
            $data['image'] = $imagePath.$imageName;
        }
        Blog::create($data);
        return redirect(route('blog.index'))->with('success', "Blog Successfully Created");
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
        return view('admin.blog.edit',['category' => $category , 'blog' => $blog ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = Crypt::decrypt($id);
        $blog = Blog::find($id);
        $request->validate([
            'category_id'      =>   'required',
            'title'            =>   'required',
            'slug'             =>   'required|unique:blogs,slug,'.$id,
            'status'           =>   'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->slug);
        if($request->has('image')){
            $image = $request->file('image')->getClientOriginalName();
            $imageName = uniqid().$image;
            $imagePath = '/upload/blog/';
            $request->image->move(public_path($imagePath), $imageName);
            $data['image'] =$imagePath.$imageName;
            if(File::exists(public_path($blog->image))){
                File::delete(public_path($blog->image));
            }
        }else{
            $data['image'] = $blog->image;
        }
          $blog->update($data);
        return redirect()->back()->with('success', 'Record has been successfully updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Crypt::decrypt($id);
        $blog = Blog::findorFail($id);
        if(File::exists(public_path($blog->image))){
            File::delete(public_path($blog->image));
        }
        Blog::destroy($id);
        return redirect()->back()->with('error', "Blog Has Been Deleted Successfully");
    }
}
