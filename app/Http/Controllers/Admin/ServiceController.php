<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $data = Service::latest()->get();
        return view('admin.service.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $icon = $request->hasFile('icon') ? ImageHelper::uploadImage($request->file('icon')) : null;
        $banner = $request->hasFile('banner') ? ImageHelper::uploadImage($request->file('banner')) : null;
        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;
        $data['icon'] = $icon;
        $data['banner'] = $banner;
        $data['image'] = $image;

        Service::create($data);
        return redirect()->route('admin.service.index')->with('success', 'Data Store successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Service::findOrFail($id);
        return view('admin.service.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Service::findOrFail($id);
        return view('admin.service.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Service::findOrFail($id);

        $icon = $request->hasFile('icon') ? ImageHelper::uploadImage($request->file('icon')) : null;
        $banner = $request->hasFile('banner') ? ImageHelper::uploadImage($request->file('banner')) : null;
        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;

        if($request->hasFile('icon') && $data->icon){
            Storage::disk('public')->delete($data->icon);
        }
        if($request->hasFile('banner') && $data->banner){
            Storage::disk('public')->delete($data->banner);
        }
        if($request->hasFile('image') && $data->image){
            Storage::disk('public')->delete($data->image);
        }
      
        $input = $request->all();
        $input['icon'] = $icon;
        $input['banner'] = $banner;
        $input['image'] = $image;

        $data->update($input);

        return redirect()->route('admin.service.index')->with('success', 'Data Update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $data = Service::findOrFail($id);
          if($data->icon){
            Storage::disk('public')->delete($data->icon);
          }
           if($data->banner){
            Storage::disk('public')->delete($data->banner);
          }
           if($data->image){
            Storage::disk('public')->delete($data->image);
          }

         $data->delete();
        return redirect()->route('admin.service.index')->with('success', 'Data Delete successfully!');
    }
}
