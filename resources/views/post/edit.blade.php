<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>
    <div class="max-w-5xl mx-auto ">
        <x-post.sessionMessage />
        <div class="container mt-5  max-w-2xl mx-4">

            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-800">Title</label>
                    <input type="text"
                        class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring focus:ring-opacity-50"
                        name="title" value="{{ $post->title }}">
                    <x-input-error :messages="$errors->first('title')" class="text-red-500 mt-2 font-semibold" />
                </div>
                <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-800">Content</label>
                    <textarea class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring focus:ring-opacity-50" name="content"
                        rows="3"></textarea>
                    <x-input-error :messages="$errors->first('content')" class="text-red-500 mt-2 font-semibold" />
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-800">Upload Image <span
                            class="text-gray-500">(optional)</span></label>
                    <input class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring focus:ring-opacity-50"
                        type="file" name="image" rows="3">
                    <x-input-error :messages="$errors->first('image')" class="text-red-500 mt-2 font-semibold" />
                </div>
                <button type="submit"
                    class="px-4 py-2 bg-purple-500 text-white rounded-md hover:bg-purple-600 focus:outline-none focus:ring focus:ring-opacity-50">Update
                    Post</button>
                <a href="{{ route('posts.index') }}"
                    class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:ring focus:ring-opacity-50 ml-2">Back</a>
            </form>
        </div>
    </div>
</x-app-layout>
