@extends('admin.layouts.app')

@section('title', 'Edit Service')

@section('content')
<section class="p-5 bg-gray-100 min-h-screen">
    <div class="mx-auto bg-white rounded-2xl shadow-lg overflow-hidden max-w-5xl">

        <!-- Header -->
        <div class="bg-gradient-to-r from-cyan-600 to-cyan-500 px-6 py-4 flex justify-between items-center">
            <h2 class="text-xl font-semibold text-white">Edit Service</h2>
            <a href="{{ route('admin.service.index') }}"
                class="bg-white/20 hover:bg-white/30 text-white px-4 py-1.5 rounded-lg transition flex items-center gap-1">
                <i class="fa fa-angle-left"></i> Back
            </a>
        </div>

        <!-- Form Body -->
        <div class="p-8">
            <form method="POST" action="{{ route('admin.service.update', $data->id) }}" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid md:grid-cols-2 gap-6">

                    <!-- Name -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Name <span class="text-red-500">*</span></label>
                        <input type="text" name="name" value="{{ old('name', $data->name) }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter name" required>
                    </div>

                    <!-- Overview -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Overview</label>
                        <input type="text" name="overview" value="{{ old('overview', $data->overview) }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter overview">
                    </div>

                    <!-- Icon -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Icon</label>
                        <input type="file" name="icon"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                        @if($data->icon)
                            <img src="{{ Storage::url($data->icon) }}" alt="Icon" class="mt-2 h-12 w-12 object-cover rounded">
                        @endif
                    </div>

                    <!-- Banner -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Banner</label>
                        <input type="file" name="banner"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                        @if($data->banner)
                            <img src="{{ Storage::url($data->banner) }}" alt="Banner" class="mt-2 h-20 object-cover rounded">
                        @endif
                    </div>

                    <!-- Image -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Image</label>
                        <input type="file" name="image"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                        @if($data->image)
                            <img src="{{ Storage::url($data->image) }}" alt="Image" class="mt-2 h-20 object-cover rounded">
                        @endif
                    </div>

                    <!-- File Download -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">File Download</label>
                        <input type="file" name="file_download"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                        @if($data->file_download)
                            <a href="{{ Storage::url($data->file_download) }}" class="mt-2 inline-block text-blue-600 underline" target="_blank">Current File</a>
                        @endif
                    </div>

                    <!-- Contact Title -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Contact Title</label>
                        <input type="text" name="contact_title" value="{{ old('contact_title', $data->contact_title) }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter contact title">
                    </div>

                    <!-- Contact Number -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Contact Number</label>
                        <input type="text" name="contact_number" value="{{ old('contact_number', $data->contact_number) }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter contact number">
                    </div>

                    <!-- Description -->
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 font-medium mb-1">Description</label>
                        <textarea name="description" rows="4"
                            class="summernote w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter description">{!!$data->description!!}</textarea>
                    </div>

                    <!-- Contact Description -->
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 font-medium mb-1">Contact Description</label>
                        <textarea name="contact_description" rows="4"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter contact description">{{ old('contact_description', $data->contact_description) }}</textarea>
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Status <span class="text-red-500">*</span></label>
                        <select name="status"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                            <option value="active" {{ old('status', $data->status) == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="deactive" {{ old('status', $data->status) == 'deactive' ? 'selected' : '' }}>Deactive</option>
                        </select>
                    </div>

                </div>

                <div class="flex justify-end pt-4 border-t">
                    <button type="submit" class="bg-cyan-600 hover:bg-cyan-700 text-white px-6 py-2 rounded-lg transition">
                        <i class="fa fa-edit"></i> Update
                    </button>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection
