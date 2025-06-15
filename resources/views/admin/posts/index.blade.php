@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Posts</h1>
    <a href="{{ route('admin.posts.create') }}" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded mb-4 inline-block">Create New Post</a>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Title</th>
                <th class="py-2 px-4 border-b">Content</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $post->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $post->title }}</td>
                    <td class="py-2 px-4 border-b">{{ Str::limit($post->content, 50) }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('admin.posts.edit', $post) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded mr-2">Edit</a>
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white py-1 px-3 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="py-2 px-4 text-center">No posts found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</div>
@endsection
