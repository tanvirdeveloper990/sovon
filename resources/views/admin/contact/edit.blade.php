@extends('admin.layouts.app')

@section('title', 'Update Contact')

@section('content')
<section class="p-6 bg-gray-100 min-h-screen">
    <div class="mx-auto max-w-7xl bg-white rounded-3xl shadow-xl overflow-hidden">

        <!-- Header -->
        <div class="bg-gradient-to-r from-cyan-600 to-cyan-500 px-6 py-5 flex justify-between items-center rounded-t-3xl">
            <h2 class="text-2xl font-semibold text-white">Update Contact</h2>
            <a href="{{ route('admin.contacts.index') }}"
                class="bg-white/20 hover:bg-white/30 text-white px-4 py-2 rounded-xl transition flex items-center gap-2">
                <i class="fa fa-angle-left"></i> Back
            </a>
        </div>

        <!-- Form Body -->
        <div class="p-8 space-y-6">
            <form method="POST" action="{{ route('admin.contacts.update', $data->id) }}" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid md:grid-cols-2 gap-6">

                    <!-- First Name -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">First Name</label>
                        <input type="text" name="fname" value="{{ old('fname', $data->fname) }}"
                            class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none shadow-sm"
                            placeholder="Enter first name">
                    </div>

                    <!-- Last Name -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Last Name</label>
                        <input type="text" name="lanme" value="{{ old('lanme', $data->lanme) }}"
                            class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none shadow-sm"
                            placeholder="Enter last name">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Email</label>
                        <input type="email" name="email" value="{{ old('email', $data->email) }}"
                            class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none shadow-sm"
                            placeholder="Enter email">
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Phone</label>
                        <input type="text" name="phone" value="{{ old('phone', $data->phone) }}"
                            class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none shadow-sm"
                            placeholder="Enter phone number">
                    </div>

                    <!-- Location -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Location</label>
                        <input type="text" name="location" value="{{ old('location', $data->location) }}"
                            class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none shadow-sm"
                            placeholder="Enter location">
                    </div>

                    <!-- Type -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Type</label>
                        <input type="text" name="type" value="{{ old('type', $data->type) }}"
                            class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none shadow-sm"
                            placeholder="Enter type">
                    </div>

                    <!-- Message -->
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 font-medium mb-1">Message</label>
                        <textarea name="message" rows="4"
                            class="w-full border border-gray-300 rounded-2xl px-4 py-3 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none shadow-sm"
                            placeholder="Enter message">{{ old('message', $data->message) }}</textarea>
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Status</label>
                        <select name="status"
                            class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:border-cyan-500 focus:ring-2 focus:ring-cyan-200 outline-none shadow-sm">
                            <option value="active" {{ old('status', $data->status) == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="deactive" {{ old('status', $data->status) == 'deactive' ? 'selected' : '' }}>Deactive</option>
                        </select>
                    </div>

                </div>

                <div class="flex justify-end pt-4 border-t">
                    <button type="submit"
                        class="bg-cyan-600 hover:bg-cyan-700 text-white px-6 py-3 rounded-2xl font-medium shadow-md transition transform hover:-translate-y-0.5">
                        <i class="fa fa-edit"></i> Update
                    </button>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection
