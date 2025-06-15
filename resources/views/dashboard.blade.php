<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @section('content')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
                <div class="container mx-auto p-6">
                    <h1 class="text-2xl font-bold mb-4">Posts</h1>
                    <a href="{{ route('admin.posts.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded mb-4 inline-block">Manage Posts</a>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
