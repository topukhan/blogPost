<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Posts') }}
        </h2>
    </x-slot>



    <div class="container mx-auto px-4 mt-4">
        <form action="{{ route('post.search') }}" method="GET" class="mb-4">
            <input type="text" name="search" placeholder="Search by title..."
                class="border border-gray-300 px-3 py-1 rounded-md focus:outline-none focus:border-blue-500">
            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-md ml-1 inline-block text-sm hover:bg-blue-600">Search</button>
            <a href="{{ route('posts.list') }}"
                class="bg-violet-600 text-white px-4 py-2 rounded-md ml-1 inline-block text-sm hover:bg-violet-800">Reset</a>
        </form>
        @if (count($posts) != 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($posts as $post)
                    <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-between h-[200px]">
                        <!-- Set a fixed height for the card -->
                        <div>
                            <h3 class="text-xl font-semibold mb-2">{{ $post->title }}</h3>
                            <p class="text-gray-700">{{ Str::limit($post->content, 100) }}</p>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <p class="text-sm text-gray-800 font-semibold">Author: {{ $post->user->name }}</p>
                            <a href="{{ route('post.show', $post->id) }}"
                                class="inline-block px-3 py-1 text-md font-semibold text-white transition duration-200 bg-blue-600 rounded-md hover:bg-blue-800">
                                Show
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-3 mb-6">
                {{ $posts->links() }}
            </div>
        @else
            <div class="text-center">
                <span class="text-red-600 font-semibold text-center text-lg"> No post found</span>
            </div>
        @endif

    </div>


</x-app-layout>
