<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = About::first();
        return view('admin.about.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data =About::findOrFail($id);

        $imageone = $request->hasFile('image_1') ? ImageHelper::uploadImage($request->file('image_1')) : null;
        $imagetwo = $request->hasFile('image_2') ? ImageHelper::uploadImage($request->file('image_2')) : null;

        if($request->hasFile('image_1') && $data->image_1){
            Storage::disk('public')->delete($data->image_1);
        }

         if($request->hasFile('image_2') && $data->image_2){
            Storage::disk('public')->delete($data->image_2);
        }

        $input = $request->all();

        $input['image_1'] = $imageone;
        $input['image_2'] = $imagetwo;

        $data->update($input);
        return redirect()->back()->with('success', 'Data Update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data =About::findOrFail($id);

         if($data->image_1){
            Storage::disk('public')->delete($data->image_1);
        }

         if($data->image_2){
            Storage::disk('public')->delete($data->image_2);
        }

        $data->delete();
        
    }
}
