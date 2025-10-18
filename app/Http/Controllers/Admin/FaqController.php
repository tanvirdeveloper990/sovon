<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
    {
        $data = Faq::latest()->get();
        return view('admin.faq.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Faq::create($data);
        return redirect()->route('admin.faqs.index')->with('success', 'Data Store successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Faq::findOrFail($id);
        return view('admin.faq.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Faq::findOrFail($id);
        return view('admin.faq.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Faq::findOrFail($id);

        $input = $request->all();
        $data->update($input);

        return redirect()->route('admin.faqs.index')->with('success', 'Data Update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $data = Faq::findOrFail($id);

         $data->delete();
        return redirect()->route('admin.faqs.index')->with('success', 'Data Delete successfully!');
    }
}
