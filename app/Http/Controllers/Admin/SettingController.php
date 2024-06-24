<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $setting = Setting::latest('id')->first();
        return view('admin.setting.create', compact('setting'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Setting::exists()){
            $setting = Setting::latest('id')->first();
        }else{
            $setting = new Setting();
        }

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
        ]);

        $data = $request->except(['logo', 'favicon']);

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $imageName = uniqid().'.'.$logo->getClientOriginalExtension();
            $imagePath = '/upload/setting/logo/';
            $logo->move(public_path($imagePath), $imageName);
           $logoN = $imagePath.$imageName;
                if (File::exists(public_path($setting->logo))) {
                    File::delete(public_path($setting->logo));
                }
        }else{
            $logoN = $setting->logo;
        }
        

        if ($request->hasFile('favicon')) {
            $favicon = $request->file('favicon');
            $imageName = uniqid().'.'.$favicon->getClientOriginalExtension();
            $imagePath = '/upload/setting/favicon/';
            $favicon->move(public_path($imagePath), $imageName);
            $faviconN = $imagePath.$imageName;
            
            if (File::exists(public_path($setting->favicon))) {
                File::delete(public_path($setting->favicon));
            }
            
        }else{
                $faviconN = $setting->favicon;

        }

        $setting->website_name      =   $request->website_name;
        $setting->website_url       =   $request->website_url;
        $setting->address           =   $request->address;
        $setting->email             =   $request->email;
        $setting->mobile            =   $request->mobile;
        $setting->logo              =   $logoN;
        $setting->logo_alt          =   $request->logo_alt;
        $setting->favicon           =   $faviconN;
        $setting->favicon_alt       =   $request->favicon_alt;
        $setting->robots            =   $request->robots;
        $setting->description       =   $request->description;
        $setting->meta_title        =   $request->meta_title;
        $setting->meta_keywords     =   $request->meta_keywords;
        $setting->meta_description  =   $request->meta_description;
        $setting->save();

        return redirect()->back()->with('success', "Setting Has Been Successfully Created!");

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

        $request->validate([
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


    $data = $request->except(['logo', 'favicon']);

    if ($request->hasFile('logo')) {
        $logo = $request->file('logo');
        $imageName = uniqid().'.'.$logo->getClientOriginalExtension();
        $imagePath = '/upload/setting/logo/';
        $logo->move(public_path($imagePath), $imageName);
        if (File::exists(public_path($setting->logo))) {
            File::delete(public_path($setting->logo));
        }

        $data['logo'] = $imagePath.$imageName;
    } else {
        $data['logo'] = $setting->logo;
    }

    if ($request->hasFile('favicon')) {
        $favicon = $request->file('favicon');
        $imageName = uniqid().'.'.$favicon->getClientOriginalExtension();
        $imagePath = '/upload/setting/favicon/';
        $favicon->move(public_path($imagePath), $imageName);
        if (File::exists(public_path($setting->favicon))) {
            File::delete(public_path($setting->favicon));
        }

        $data['favicon'] = $imagePath.$imageName;
    } else {
        $data['favicon'] = $setting->favicon;
    }

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
