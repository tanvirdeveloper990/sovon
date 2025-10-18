<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Brand::latest()->get();
        return view('admin.brand.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;
        $data['image'] = $image;

        Brand::create($data);
        return redirect()->route('admin.brands.index')->with('success', 'Data Store successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Brand::findOrFail($id);
        return view('admin.brand.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Brand::findOrFail($id);
        return view('admin.brand.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Brand::findOrFail($id);

        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;
        if($request->hasFile('image') && $data->image){
            Storage::disk('public')->delete($data->image);
        }
      
        $input = $request->all();
        $input['image'] = $image;
        $data->update($input);

        return redirect()->route('admin.brands.index')->with('success', 'Data Update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $data = Brand::findOrFail($id);
          if($data->image){
            Storage::disk('public')->delete($data->image);
          }

         $data->delete();
        return redirect()->route('admin.brands.index')->with('success', 'Data Delete successfully!');
    }
}
