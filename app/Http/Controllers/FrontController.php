<?php

namespace App\Http\Controllers;

use App\Models\{Blog, Setting, Category};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontController extends Controller
{
    public function __construct()
    {
        $setting = Setting::firstOrFail();
        $categories = Category::where('status',1)->latest()->take(5)->get();
        View::share(compact('setting', 'categories'));
    }
    public function index()
    {
        $blogs  = Blog::where('status',1)->get();
        return view('front.index', compact('blogs'));
    }

    public function blogDetails($slug)
    {
        $blog       = Blog::where('slug', $slug)->firstOrFail();
        $relatedBlog = Blog::where('slug','!=' ,$slug)
                        ->where('status', 1)
                        ->limit(4)
                    ->get();
        return view('front.blogdetails', compact('blog', 'relatedBlog'));
    }
}
