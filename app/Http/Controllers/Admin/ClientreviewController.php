<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\ClientReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientreviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ClientReview::latest()->get();
        return view('admin.client-review.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.client-review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;
        $data['image'] = $image;

        ClientReview::create($data);
        return redirect()->route('admin.client-review.index')->with('success', 'Data Store successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = ClientReview::findOrFail($id);
        return view('admin.client-review.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ClientReview::findOrFail($id);
        return view('admin.client-review.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = ClientReview::findOrFail($id);

        $image = $request->hasFile('image') ? ImageHelper::uploadImage($request->file('image')) : null;
        if($request->hasFile('image') && $data->image){
            Storage::disk('public')->delete($data->image);
        }
      
        $input = $request->all();
        $input['image'] = $image;
        $data->update($input);

        return redirect()->route('admin.client-review.index')->with('success', 'Data Update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $data = ClientReview::findOrFail($id);
          if($data->image){
            Storage::disk('public')->delete($data->image);
          }

         $data->delete();
        return redirect()->route('admin.client-review.index')->with('success', 'Data Delete successfully!');
    }
}
