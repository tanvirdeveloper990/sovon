@extends('admin.layouts.app')

@section('title', 'Update Category')

@section('content')
<section class="p-5 bg-gray-100 min-h-screen">
    <div class="mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">

        <!-- Header -->
        <div class="bg-gradient-to-r from-cyan-600 to-cyan-500 px-6 py-4 flex justify-between items-center">
            <h2 class="text-xl font-semibold text-white">
                Update Category
            </h2>
            <a href="{{ route('admin.categories.index') }}"
                class="bg-white/20 hover:bg-white/30 text-white px-4 py-1.5 rounded-lg transition flex items-center gap-1">
                <i class="fa fa-angle-left"></i> Back
            </a>
        </div>

        <!-- Form Body -->
        <div class="p-8">
            <form method="POST" action="{{ route('admin.categories.update', $data->id) }}" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">
                            Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="name" value="{{ old('name', $data->name) }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter name" required>
                    </div>

                    <!-- Slug -->
                    <!-- <div>
                        <label class="block text-gray-700 font-medium mb-1">
                            Slug <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="slug" value="{{ old('slug', $data->slug) }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter Slug" required>
                    </div> -->

                    <!-- Image -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">
                            Image
                        </label>
                        <input type="file" name="image"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                        @if($data->image)
                            <img src="{{Storage::url($data->image)}}" class="w-24 h-24 object-cover mt-2 rounded-lg border">
                        @endif
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">
                            Status <span class="text-red-500">*</span>
                        </label>
                        <select name="status"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                            <option value="active" {{ $data->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="deactive" {{ $data->status == 'deactive' ? 'selected' : '' }}>Deactive</option>
                        </select>
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
