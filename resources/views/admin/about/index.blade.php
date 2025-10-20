@extends('admin.layouts.app')

@section('title', 'Update Abouts')

@section('content')
<section class="p-5 bg-gray-100 min-h-screen">
    <div class="mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">

        <!-- Header -->
        <div class="bg-gradient-to-r from-cyan-600 to-cyan-500 px-6 py-4 flex justify-between items-center">
            <h2 class="text-xl font-semibold text-white">
                Update Abouts
            </h2>
            
        </div>

        <!-- Form Body -->
        <div class="p-8">
            <form method="POST" action="{{ route('admin.abouts.update', $data->id) }}" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid md:grid-cols-2 gap-6">

                    <!-- Image 1 -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Image 1</label>
                        <input type="file" name="image_1"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                        @if($data->image_1)
                        <img src="{{ Storage::url($data->image_1) }}" class="w-24 h-24 object-cover mt-2 rounded-lg border">
                        @endif
                    </div>

                    <!-- Image 2 -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Image 2</label>
                        <input type="file" name="image_2"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                        @if($data->image_2)
                        <img src="{{ Storage::url($data->image_2) }}" class="w-24 h-24 object-cover mt-2 rounded-lg border">
                        @endif
                    </div>

                    <!-- Logo -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Company Logo</label>
                        <input type="file" name="logo"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                        @if($data->logo)
                        <img src="{{ Storage::url($data->logo) }}" class="w-24 h-24 object-cover mt-2 rounded-lg border">
                        @endif
                    </div>

                    <!-- About Company -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">About Company</label>
                        <textarea name="about_company"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 h-24 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Write about the company">{{ old('about_company', $data->about_company) }}</textarea>
                    </div>

                    <!-- Title -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Title</label>
                        <input type="text" name="title" value="{{ old('title', $data->title) }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter title">
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Description</label>
                        <textarea name="description"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 h-24 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter description">{{ old('description', $data->description) }}</textarea>
                    </div>

                    <!-- Experience -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Experience</label>
                        <input type="text" name="experience" value="{{ old('experience', $data->experience) }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="e.g. 5 Years Experience">
                    </div>
                </div>

                <div class="flex justify-end pt-4 border-t">
                    <button type="submit"
                        class="bg-cyan-600 hover:bg-cyan-700 text-white px-6 py-2 rounded-lg transition">
                        <i class="fa fa-edit"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection