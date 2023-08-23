<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="container px-4 mx-auto my-4">
        <x-post.sessionMessage />
        <a href="{{ route('posts.create') }}"
            class="bg-gray-800 text-white px-4 py-2 rounded mb-3 inline-block hover:bg-gray-700">Add Post</a>
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100 border-b border-gray-300">
                    <th class="px-4 py-2">SL.</th>
                    <th class="px-4 py-2">Author's Name</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Content</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- Paginate serial number correctly --}}
                @php
                    $starting_serial = ($posts->currentPage() - 1) * $posts->perPage() + 1;
                @endphp
                @foreach ($posts as $post)
                    <tr class="border-b border-gray-300 text-center">
                        <td class="px-4 py-2">{{ $starting_serial++ }}</td>
                        <td class="px-4 py-2">{{ $post->user->name }}</td>
                        <td class="px-4 py-2">{{ $post->title }}</td>
                        <td class="px-4 py-2">{{ Str::limit($post->content, 20) }}</td>
                        <td class="px-4 py-3">
                            <a href="{{ route('posts.show', $post->id) }}"
                                class="inline-block px-3 py-1 my-1 text-md font-semibold  text-white transition duration-200 bg-blue-600 rounded-md hover:bg-blue-800">
                                Show
                            </a>
                            <a href="{{ route('posts.edit', $post->id) }}"
                                class="inline-block px-3 py-1 my-1 text-md font-semibold  text-yellow-600 transition duration-200 bg-yellow-200 rounded-md hover:bg-yellow-300 ml-2">
                                Edit
                            </a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-block px-3 py-1 my-1 text-md font-semibold text-red-600 transition duration-200 bg-red-200 rounded-md hover:bg-red-300 ml-2"
                                    onclick="return confirm('Are you sure you want to delete this post?')">
                                    Delete
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <x-post.pagination :posts="$posts" />
    </div>


</x-app-layout>
