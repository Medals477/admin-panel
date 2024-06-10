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
        // return $this->getName("Ajeeet");
        $blog = Blog::latest('id')->paginate(50);
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
            'image'           => 'required|mimes:jpg,png,webp,svg|max:1024',
            'status'          => 'required',
            'meta_title'      => 'required',
            'meta_keywords'   => 'required',
        ]);
           $data = $request->all();
           $data['slug'] = Str::slug($request->slug);
           if($request->has('image')){
            $image = $request->image->getClientOriginalName();
            $imageName = uniqid().$image;
            $imagePath = '/upload/blog/'; 
            $request->image->move(public_path($imagePath), $imageName);
            $data['image'] =$imagePath.$imageName;
           }
           Blog::create($data);
           return redirect(route('blog.index'))->with('success', "Blog Successfully Created!");
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
        $blog = Blog::findOrFail($id);
        if(File::exists(public_path($blog->image))){
            File::delete(public_path($blog->image));
        }
        Blog::destroy($id);
        return redirect()->back()->with('success', 'Record Has Been Deleted Successfully!');
    }

    protected function getName($name)
    {
        return $name;
    }

    public function getAjax()
    {
        return view('admin.ajax.index');
    }

    public function setAjax(Request $request)
    {
        return response()->json($request->all());
    }
}
