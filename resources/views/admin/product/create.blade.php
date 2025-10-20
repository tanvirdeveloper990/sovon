@extends('admin.layouts.app')

@section('title', 'Add Product')

@section('content')
<section class="p-5 bg-gray-100 min-h-screen">
    <div class="mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">

        <!-- Header -->
        <div class="bg-gradient-to-r from-cyan-600 to-cyan-500 px-6 py-4 flex justify-between items-center">
            <h2 class="text-xl font-semibold text-white">
                Add Product
            </h2>
            <a href="{{ route('admin.products.index') }}"
                class="bg-white/20 hover:bg-white/30 text-white px-4 py-1.5 rounded-lg transition flex items-center gap-1">
                <i class="fa fa-angle-left"></i> Back
            </a>
        </div>

        <!-- Form Body -->
        <div class="p-8">
            <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Category -->
                    <select name="category_id" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none" required>
                        <option value="">Choose Category</option>
                        @foreach($category as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>

                    <!-- SubCategory -->
                    <select name="sub_category_id" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none" required>
                        <option value="">Choose SubCategory</option>
                        @foreach($subcategory as $sub)
                        <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                        @endforeach
                    </select>


                    <!-- Name -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">
                            Product Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter product name" required>
                    </div>

                    <!-- Slug -->
                    <!-- <div>
                        <label class="block text-gray-700 font-medium mb-1">
                            Slug
                        </label>
                        <input type="text" name="slug" value="{{ old('slug') }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter slug">
                    </div> -->

                    <!-- Image -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">
                            Image
                        </label>
                        <input type="file" name="image"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                    </div>

                    <!-- Review -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">
                            Review
                        </label>
                        <input type="text" name="review" value="{{ old('review') }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter review">
                    </div>

                    <!-- Product Text -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">
                            Product Text
                        </label>
                        <input type="text" name="product_text" value="{{ old('product_text') }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter product text">
                    </div>

                    <!-- Product Text Description -->
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 font-medium mb-1">
                            Product Description
                        </label>
                        <textarea name="product_text_description" rows="4"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter product description">{{ old('product_text_description') }}</textarea>
                    </div>

                    <!-- Description -->
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 font-medium mb-1">
                            Description
                        </label>
                        <textarea name="description" rows="4"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter description">{{ old('description') }}</textarea>
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">
                            Status <span class="text-red-500">*</span>
                        </label>
                        <select name="status" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none" required>
                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="deactive" {{ old('status', 'deactive') == 'deactive' ? 'selected' : '' }}>Deactive</option>
                        </select>
                    </div>

                </div>

                <div class="flex justify-end pt-4 border-t">
                    <button type="submit" class="bg-cyan-600 hover:bg-cyan-700 text-white px-6 py-2 rounded-lg transition">
                        <i class="fa fa-save"></i> Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection