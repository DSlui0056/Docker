@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 max-w-2xl">
    <h1 class="text-2xl font-bold mb-4">Edit Post</h1>
    <form action="{{ route('admin.posts.update', $post) }}" method="POST" class="bg-white p-6 rounded shadow border border-gray-200">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block font-semibold mb-1">Title</label>
            <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{ old('title', $post->title) }}" required>
            @error('title')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="content" class="block font-semibold mb-1">Content</label>
            <textarea name="content" id="content" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" rows="5" required>{{ old('content', $post->content) }}</textarea>
            @error('content')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Update</button>
            <a href="{{ route('admin.posts.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded">Cancel</a>
        </div>
    </form>
</div>
@endsection
