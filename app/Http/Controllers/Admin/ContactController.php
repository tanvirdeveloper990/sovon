<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $data = Contact::latest()->get();
        return view('admin.contact.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Contact::create($data);
        return redirect()->route('admin.contacts.index')->with('success', 'Data Store successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Contact::findOrFail($id);
        return view('admin.contact.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Contact::findOrFail($id);
        return view('admin.contact.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Contact::findOrFail($id);

        $input = $request->all();
        $data->update($input);

        return redirect()->route('admin.contacts.index')->with('success', 'Data Update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $data = Contact::findOrFail($id);

         $data->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Data Delete successfully!');
    }
}
