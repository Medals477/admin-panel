<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PhpParser\Node\Stmt\Return_;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $media = Media::latest('id')->get();
        return view('admin.media.index', compact('media'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.media.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->has('image')) {
            $image = $request->image->getClientOriginalName();
            $imageName = uniqid().$image;
            $imagePath = '/upload/media/';
            $request->image->move(public_path($imagePath),$imageName);
            $data['image'] = $imagePath.$imageName;
        }
        Media::create($data);
        return redirect(route('media.index'))->with('success',"Media Successfully Added");
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
        $media = Media::find($id);
        return view('admin.media.edit',['media'=>$media]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = Crypt::decrypt($id);
        $media = Media::find($id);
        $data = $request->all();
        if ($request->has('image')) {
            $image = $request->image->getClientOriginalName();
            $imageName = uniqid().$image;
            $imagePath = '/upload/media/';
            $request->image->move(public_path($imagePath),$imageName);
            $data['image'] = $imagePath.$imageName;
            if (File::exists(public_path($media->image))) {
                File::delete(public_path($media->image));
            }
        } else {
            $data['image'] = $media->image;
        }
        $media->update($data);
        return redirect()->back()->with('success', 'Media has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // return Crypt::decrypt($id);
        $media = Media::findOrFail(Crypt::decrypt($id));
        if (File::exists(public_path($media->image))) {
            File::delete(public_path($media->image));
        }

        $media->delete();

        return redirect()->back()->with('error', 'Media has been successfully updated!');
    }

    public function search(Request  $request)
    {
        $search = $request->search;
        $media = Media::where('alt' , 'LIKE', "%$search%")
                ->get();
        return view('admin.media.search', ['media' => $media, 'search' => $search]);
    }

    public function view()
    {
        return view('admin.media.view');
    }

    public function multipleImage(Request $request)
    {
        $request->validate([
            'image'     =>  'required',
            'image.*'   =>  'required|image|max:1024',
        ]);

        $images = $request->image;
        if( $request->has('image')){
            foreach($images as $key => $image){
                $imageName = $image->getClientOriginalName();
                $imageStr = uniqid().$imageName;
                $imagePath = '/upload/media/';
                $image->move(public_path($imagePath),$imageName);

                Media::create([
                    'image' => $imagePath.$imageStr,
                ]);
            }
            return redirect()->back()->with('success', 'Images have been successfully uploaded');
        }
    }

    public function dynamic()
    {
        $media = Media::latest('id')->get();
        return view('admin.media.dynamic',compact('media'));
    }
}
