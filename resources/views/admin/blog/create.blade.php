@extends('admin.layouts.app')

@section('title', 'Add Blog')

@section('content')
<section class="p-5 bg-gray-100 min-h-screen">
    <div class="mx-auto bg-white rounded-2xl shadow-lg overflow-hidden max-w-5xl">

        <!-- Header -->
        <div class="bg-gradient-to-r from-cyan-600 to-cyan-500 px-6 py-4 flex justify-between items-center">
            <h2 class="text-xl font-semibold text-white">Add Blog</h2>
            <a href="{{ route('admin.blogs.index') }}"
                class="bg-white/20 hover:bg-white/30 text-white px-4 py-1.5 rounded-lg transition flex items-center gap-1">
                <i class="fa fa-angle-left"></i> Back
            </a>
        </div>

        <!-- Form Body -->
        <div class="p-8">
            <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Title -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Title <span class="text-red-500">*</span></label>
                        <input type="text" name="title" value="{{ old('title') }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter blog title" required>
                    </div>

                    <!-- Slug -->
                    <!-- <div>
                        <label class="block text-gray-700 font-medium mb-1">Slug</label>
                        <input type="text" name="slug" value="{{ old('slug') }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter slug">
                    </div> -->

                    <!-- Post Date -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Post Date</label>
                        <input type="date" name="post_date" value="{{ old('post_date') }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                    </div>

                    <!-- Choose Type -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Choose Type</label>
                        <select name="choose_type"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                            <option value="" disabled selected>Select type</option>
                            <option value="news" {{ old('choose_type') == 'news' ? 'selected' : '' }}>News</option>
                            <option value="article" {{ old('choose_type') == 'article' ? 'selected' : '' }}>Article</option>
                            <option value="tips" {{ old('choose_type') == 'tips' ? 'selected' : '' }}>Tips</option>
                        </select>
                    </div>

                    <!-- Image -->
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 font-medium mb-1">Image</label>
                        <input type="file" name="image"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                    </div>

                    <!-- Short Description -->
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 font-medium mb-1">Short Description</label>
                        <textarea name="short_description" rows="3"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Write a short description">{{ old('short_description') }}</textarea>
                    </div>

                    <!-- Description -->
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 font-medium mb-1">Description</label>
                        <textarea name="description" rows="6"
                            class=" summernote w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Write full description">{{ old('description') }}</textarea>
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Status</label>
                        <select name="status"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="deactive" {{ old('status', 'deactive') == 'deactive' ? 'selected' : '' }}>Deactive</option>
                        </select>
                    </div>
                </div>

                <div class="flex justify-end pt-4 border-t">
                    <button type="submit"
                        class="bg-cyan-600 hover:bg-cyan-700 text-white px-6 py-2 rounded-lg transition">
                        <i class="fa fa-save"></i> Save
                    </button>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection
