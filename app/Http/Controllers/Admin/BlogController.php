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
<<<<<<< HEAD
=======
        // return $this->getName("Ajeeet");
>>>>>>> 531c3e6a7b3b5f02bc6000927e8f4562dc2afd3d
        $blog = Blog::latest('id')->paginate(50);
        return view('admin.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
<<<<<<< HEAD
        return view('admin.blog.create',compact('category'));
=======
        return view('admin.blog.create', compact('category'));
>>>>>>> 531c3e6a7b3b5f02bc6000927e8f4562dc2afd3d
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
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
=======
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
        $blog = Blog::find($id);
        $category = Category::all();
<<<<<<< HEAD
        return view('admin.blog.edit',['category' => $category , 'blog' => $blog ]);
=======
        return view('admin.blog.edit',['blog'=>$blog,],compact('category'));
>>>>>>> 531c3e6a7b3b5f02bc6000927e8f4562dc2afd3d
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = Crypt::decrypt($id);
        $blog = Blog::find($id);
        $request->validate([
<<<<<<< HEAD
            'category_id'      =>   'required',
            'title'            =>   'required',
            'slug'             =>   'required|unique:blogs,slug,'.$id,
            'status'           =>   'required',
        ]);

=======
            'category_id'     => 'required',
            'title'           => 'required',
            'slug'            => 'required|unique:blogs,slug,'.$id,
            'status'          => 'required',
            'meta_title'      => 'required',
            'meta_keywords'   => 'required',
       ]);
>>>>>>> 531c3e6a7b3b5f02bc6000927e8f4562dc2afd3d
        $data = $request->all();
        $data['slug'] = Str::slug($request->slug);
        if($request->has('image')){
            $image = $request->file('image')->getClientOriginalName();
            $imageName = uniqid().$image;
<<<<<<< HEAD
            $imagePath = '/upload/blog/';
=======
            $imagePath = '/upload/blog/'; 
>>>>>>> 531c3e6a7b3b5f02bc6000927e8f4562dc2afd3d
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
<<<<<<< HEAD
        $blog = Blog::findorFail($id);
=======
        $blog = Blog::findOrFail($id);
>>>>>>> 531c3e6a7b3b5f02bc6000927e8f4562dc2afd3d
        if(File::exists(public_path($blog->image))){
            File::delete(public_path($blog->image));
        }
        Blog::destroy($id);
<<<<<<< HEAD
        return redirect()->back()->with('error', "Blog Has Been Deleted Successfully");
=======
        return redirect()->back()->with('success', 'Record Has Been Deleted Successfully!');
    }

    protected function getName($name)
    {
        return $name;
    }

    public function getAjax()
    {
        $category = Category::all();
        return view('admin.ajax.create', compact('category'));
    }

    public function setAjax(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->status = $request->status;
        $blog->category_id = $request->categoryid;
        $blog->slug = Str::slug($request->slug);
        $blog->save();

        return response()->json(['success' => true , 'message' => "Blog successfully created!"]);
    }

    public function getDelete()
    {
        $blogs = Blog::all();
        return view('admin.ajax.index', ['blogs' => $blogs]);
    }

    public function deleteAjax(Request $request)
    {
        Blog::destroy($request->id);
        return response()->json(['success' => true, 'message' => "You have successfully deleted!"]);
    }

    public function search(Request  $request)
    {
        $search = $request->search;
        $blogs = Blog::where('title' , 'LIKE', "%$search%")
                    ->orWhere('slug', "LIKE", "%$search%")
                ->get();
        return view('admin.ajax.search', ['blogs' => $blogs, 'search' => $search]);
>>>>>>> 531c3e6a7b3b5f02bc6000927e8f4562dc2afd3d
    }
}
