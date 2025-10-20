@extends('admin.layouts.app')

@section('title', 'Update Event')

@section('content')
<section class="p-5 bg-gray-100 min-h-screen">
    <div class="mx-auto bg-white rounded-2xl shadow-lg overflow-hidden max-w-5xl">

        <!-- Header -->
        <div class="bg-gradient-to-r from-cyan-600 to-cyan-500 px-6 py-4 flex justify-between items-center">
            <h2 class="text-xl font-semibold text-white">
                Update Event
            </h2>
            <a href="{{ route('admin.events.index') }}"
                class="bg-white/20 hover:bg-white/30 text-white px-4 py-1.5 rounded-lg transition flex items-center gap-1">
                <i class="fa fa-angle-left"></i> Back
            </a>
        </div>

        <!-- Form Body -->
        <div class="p-8">
            <form method="POST" action="{{ route('admin.events.update', $data->id) }}" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid md:grid-cols-2 gap-6">
                    
                    <!-- Title -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Title <span class="text-red-500">*</span></label>
                        <input type="text" name="title" value="{{ old('title', $data->title) }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter event title" required>
                    </div>

                    <!-- Slug -->
                    <div >
                        <label class="block text-gray-700 font-medium mb-1">Slug <span class="text-red-500">*</span></label>
                        <input type="text" name="slug" value="{{ old('slug', $data->slug) }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter event slug" required>
                    </div>

                    <!-- Event Date -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Event Date <span class="text-red-500">*</span></label>
                        <input type="date" name="event_date" value="{{ old('event_date', $data->event_date) }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none" required>
                    </div>

                    <!-- Event Time -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Event Time <span class="text-red-500">*</span></label>
                        <input type="time" name="event_time" value="{{ old('event_time', $data->event_time) }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none" required>
                    </div>

                    <!-- Location -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Event Location <span class="text-red-500">*</span></label>
                        <input type="text" name="event_location" value="{{ old('event_location', $data->event_location) }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Enter event location" required>
                    </div>

                    <!-- Image -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Event Image</label>
                        <input type="file" name="image"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none">
                        @if ($data->image)
                            <img src="{{ Storage::url($data->image) }}" alt="Event Image"
                                class="w-28 h-28 mt-3 rounded-lg shadow">
                        @endif
                    </div>

                    <!-- Description -->
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 font-medium mb-1">Description</label>
                        <textarea name="description" rows="5"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:border-cyan-500 focus:ring-0 outline-none"
                            placeholder="Write event details...">{{ old('description', $data->description) }}</textarea>
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

                <!-- Submit -->
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
