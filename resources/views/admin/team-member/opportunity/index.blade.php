@extends('admin.layouts.app')

@section('title', 'Update Opportunities')

@section('content')
<section class="p-5 bg-gray-100 min-h-screen">
    <div class="mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">

        <!-- Header -->
        <div class="bg-gradient-to-r from-cyan-600 to-cyan-500 px-6 py-4 flex justify-between items-center">
            <h2 class="text-xl font-semibold text-white">
                Update Opportunities
            </h2>
            
        </div>

        <!-- Form Body -->
        <div class="p-8">
            <form method="POST" action="{{ route('admin.opportunities.update', $data->id) }}" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid md:grid-cols-1 gap-6">


                 <!-- Title -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Title</label>
                        <input type="text" name="title" value="{{ old('title', $data->title) }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter title">
                    </div>

                     <!-- About Company -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Description</label>
                        <textarea name="description"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 h-24 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Write about the company">{{ old('description', $data->description) }}</textarea>
                    </div>

                    <!-- Image 1 -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Image</label>
                        <input type="file" name="image"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                        @if($data->image)
                        <img src="{{ Storage::url($data->image) }}" class="w-24 h-24 object-cover mt-2 rounded-lg border">
                        @endif
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">
                            Status <span class="text-red-500">*</span>
                        </label>
                        <select name="status" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
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