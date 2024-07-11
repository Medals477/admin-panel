<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

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

        $request->validate([
            'name'            =>     'required',
            'slug'            =>     'required|unique:categories,slug,'.$id,
            'status'          =>     'required',
        ]);
        $data = $request->all();
        $data['slug'] = Str::slug($request->slug);
        $category->update($data);
        return redirect()->back()->with('success', 'Record Has Been Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Crypt::decrypt($id);
        Category::destroy($id);

    return redirect()->back()->with('error', 'Record Has Been Deleted Successfully!');
    }

    public function search(Request  $request)
    {
        $search = $request->search;
        $category = Category::where('name' , 'LIKE', "%$search%")
                    ->orWhere('slug', "LIKE", "%$search%")
                ->get();
        return view('admin.category.search', ['category' => $category, 'search' => $search]);
    }
}
