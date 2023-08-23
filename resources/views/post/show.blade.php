<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($post->user->name."'s Post") }}
        </h2>
    </x-slot>
    <div class="max-w-5xl mx-auto ">
        <div class="container mt-5  max-w-2xl mx-4">
            <div class="mt-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="mb-4">
                        <label class="text-md font-semibold" for="title">Title</label>
                        <h5 class="text-lg ">{{ ucfirst($post->title) }}</h5>
                    </div>
                    <div class="mb-4">
                        <label class="text-md font-semibold" for="content">Content</label>
                        <p class="text-gray-800">{{ $post->content }}</p>
                    </div>
                    @if ($post->image != null)
                        <div>
                            <label class="text-sm font-semibold" for="image">Image</label>
                            <img class="mt-2 rounded shadow-xl" src="{{ asset('storage/images/' . $post->image) }}"
                                alt="Image">
                        </div>
                    @endif
                </div>
            </div>

        </div>
        <div class="flex justify-start py-4 mx-4">
            <a href="{{ route('posts.index') }}"
                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-800 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                Back to List
            </a>
        </div>
    </div>
</x-app-layout>
