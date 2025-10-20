<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ClientReview;
use App\Models\Counter;
use App\Models\Hero;
use App\Models\Opportunity;
use App\Models\Service;
use App\Models\Setting;

class WebsiteController extends Controller
{
    public function index()
    {  
        $hero=Hero::where( 'status','active')->get();
        $about=About::first();
        $counters = Counter::where('status','active')->get();
        $services = Service::where('status','active')->get();
        $setting = Setting::first();
        $reviews = ClientReview::where('status','active')->get();
        $news = Blog::where('status','active')->get();
        $brands = Brand::where('status','active')->get();
        $categories = Category::with('subcategories')->where('status','active')->get();

        $opportunities = Opportunity::first();
        return view('website.index',compact('hero','about','counters','services','setting','reviews','news','categories','brands','opportunities'));
    }
    
    public function serviceSingle($slug)
    {  
        $data = Service::where('slug',$slug)->firstOrFail();
        return view('website.service-single',compact('data'));
    }
    
    public function news()
    {  
        $news = Blog::where('status','active')->get();
        return view('website.news',compact('news'));
    }
    public function newsSingle($slug)
    {  
        $data = Blog::where('slug',$slug)->firstOrFail();
        return view('website.news-single',compact('data'));
    }


}
