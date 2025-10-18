<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $data = Counter::latest()->get();
        return view('admin.counter.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.counter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $icon = $request->hasFile('icon') ? ImageHelper::uploadImage($request->file('icon')) : null;
        $data['icon'] = $icon;

        Counter::create($data);
        return redirect()->route('admin.counters.index')->with('success', 'Data Store successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Counter::findOrFail($id);
        return view('admin.counter.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Counter::findOrFail($id);
        return view('admin.counter.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Counter::findOrFail($id);

        $icon = $request->hasFile('icon') ? ImageHelper::uploadImage($request->file('icon')) : null;
        if($request->hasFile('icon') && $data->icon){
            Storage::disk('public')->delete($data->icon);
        }
      
        $input = $request->all();
        $input['icon'] = $icon;
        $data->update($input);

        return redirect()->route('admin.counters.index')->with('success', 'Data Update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $data = Counter::findOrFail($id);
          if($data->icon){
            Storage::disk('public')->delete($data->icon);
          }

         $data->delete();
        return redirect()->route('admin.counters.index')->with('success', 'Data Delete successfully!');
    }
}
