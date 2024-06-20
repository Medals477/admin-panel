<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Code;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class CodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $code = Code::all();
        return view('admin.codes.index', compact('code'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.codes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'header'       => 'required',
            'footer'       => 'required',
        ]);
        $data = $request->all();
        Code::create($data);
        return redirect(route('code.index'))->with('success', "Blog Successfully Created");
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
        $code = Code::find($id);
        return view('admin.codes.edit',['code'=>$code]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = Crypt::decrypt($id);
        $code = Code::find($id);
        $request->validate([
            'header' => 'required|unique:codes,header,'.$id,
            'footer' => 'required|unique:codes,footer,'.$id,
        ]);
        $data = $request->all();
        $code->update($data);
        return redirect()->back()->with('success',"Code Has Been Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Crypt::decrypt($id);
        Code::destroy($id);
        return redirect()->back()->with('error',"Code Has Been Succesfully Deleted");
    }
}
