<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::latest('id')->get();
        return view('admin.setting.index',compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'website_name'             =>   'required',
            'website_url'              =>   'required',
            'address'                  =>   'required',
            'mobile'                   =>   'required',
            'email'                    =>   'required',
            'logo_alt'                 =>   'required',
            'favicon_alt'              =>   'required',
            'robots'                   =>   'required',
            'description'              =>   'required',
            'meta_title'               =>   'required',
            'meta_keywords'            =>   'required',
            'logo'                     => 'required|mimes:jpg,png,webp,svg|max:1024',
            'favicon'                  => 'required|mimes:jpg,png,webp,svg|max:1024',
        ]);

        $data = $request->except(['logo', 'favicon']);

    if ($request->hasFile('logo')) {
        $logo = $request->file('logo');
        $imageName = uniqid().'.'.$logo->getClientOriginalExtension();
        $imagePath = '/upload/setting/logo/';
        $logo->move(public_path($imagePath), $imageName);
        $data['logo'] = $imagePath.$imageName;
    }

    if ($request->hasFile('favicon')) {
        $favicon = $request->file('favicon');
        $imageName = uniqid().'.'.$favicon->getClientOriginalExtension();
        $imagePath = '/upload/setting/favicon/';
        $favicon->move(public_path($imagePath), $imageName);
        $data['favicon'] = $imagePath.$imageName;
    }
        Setting::create($data);
        return redirect(route('setting.index'))->with('success', "Setting Has Been Successfully Created!");

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
        $setting = Setting::find($id);
        return view('admin.setting.edit',['setting'=>$setting]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = Crypt::decrypt($id);
    $setting = Setting::findOrFail($id);

    $validator = Validator::make($request->all(), [
        'website_name'    => 'required',
        'website_url'     => 'required',
        'address'         => 'required',
        'mobile'          => 'required',
        'email'           => 'required|email',
        'logo_alt'        => 'required',
        'favicon_alt'     => 'required',
        'robots'          => 'required',
        'description'     => 'required',
        'meta_title'      => 'required',
        'meta_keywords'   => 'required',
        'logo'            => 'nullable|mimes:jpg,png,webp,svg|max:4096',
        'favicon'         => 'nullable|mimes:jpg,png,webp,svg|max:4096',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $data = $request->except(['logo', 'favicon']);

    // Handle logo upload
    if ($request->hasFile('logo')) {
        $logo = $request->file('logo');
        $imageName = uniqid().'.'.$logo->getClientOriginalExtension();
        $imagePath = '/upload/setting/logo/';
        $logo->move(public_path($imagePath), $imageName);

        // Delete old logo file if exists
        if (File::exists(public_path($setting->logo))) {
            File::delete(public_path($setting->logo));
        }

        $data['logo'] = $imagePath.$imageName;
    } else {
        $data['logo'] = $setting->logo; // Keep existing logo if no new file uploaded
    }

    // Handle favicon upload
    if ($request->hasFile('favicon')) {
        $favicon = $request->file('favicon');
        $imageName = uniqid().'.'.$favicon->getClientOriginalExtension();
        $imagePath = '/upload/setting/favicon/';
        $favicon->move(public_path($imagePath), $imageName);

        // Delete old favicon file if exists
        if (File::exists(public_path($setting->favicon))) {
            File::delete(public_path($setting->favicon));
        }

        $data['favicon'] = $imagePath.$imageName;
    } else {
        $data['favicon'] = $setting->favicon; // Keep existing favicon if no new file uploaded
    }

    // Update the setting with new data
    $setting->update($data);

    return redirect()->back()->with('success', 'Setting has been successfully updated!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Crypt::decrypt($id);
        $setting = Setting::findOrFail($id);
        if (File::exists(public_path($setting->logo))) {
            File::delete(public_path($setting->logo));
        }
        if (File::exists(public_path($setting->favicon))) {
            File::delete(public_path($setting->favicon));
        }
        Setting::destroy($id);
        return redirect()->back()->with('error', 'Record Has Been Deleted Successfully!');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $setting = Setting::where('website_name' , 'LIKE', "%$search%")
                ->orWhere('website_url', "LIKE", "%$search%")
                ->get();
        return view('admin.setting.search', ['setting' => $setting, 'search' => $search]);
    }
}
