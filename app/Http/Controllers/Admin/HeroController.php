<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Hero::latest()->get();
        return view('admin.hero.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $video = $request->hasFile('video') ? ImageHelper::uploadImage($request->file('video')) : null;
        $data['video'] = $video;
        Hero::create($data);
        return redirect()->route('admin.hero.index')->with('success', 'Data Store successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Hero::findOrFail($id);
        return view('admin.hero.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Hero::findOrFail($id);
        return view('admin.hero.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Hero::findOrFail($id);

        $video = $request->hasFile('video') ? ImageHelper::uploadImage($request->file('video')) : null;
        if($request->hasFile('video') && $data->video){
            Storage::disk('public')->delete($data->video);
        }

        $input = $request->all();
        $input['video'] = $video;
        $data->update($input);

        return redirect()->route('admin.hero.index')->with('success', 'Data Update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $data = Hero::findOrFail($id);
         if($data->video){
            Storage::disk('public')->delete($data->video);
          }
         $data->delete();
        return redirect()->route('admin.hero.index')->with('success', 'Data Delete successfully!');
    }
}
