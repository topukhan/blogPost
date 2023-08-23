<div class="flex items-center justify-start mt-4">
    <nav class="flex items-center">
        {{-- Previous Page Link --}}
        @if ($posts->onFirstPage())
            <span class="px-2 py-1 text-sm font-medium leading-5 text-gray-400 cursor-not-allowed">First</span>
            <span
                class="px-2 py-1 text-sm font-medium leading-5 text-gray-400 cursor-not-allowed">Previous</span>
        @else
            <a href="{{ $posts->url(1) }}"
                class="relative inline-flex items-center px-2 py-1 text-sm font-medium leading-5 text-blue-600 transition duration-150 ease-in-out border rounded-md cursor-pointer hover:text-blue-800">First</a>
            <a href="{{ $posts->previousPageUrl() }}"
                class="relative inline-flex items-center px-2 py-1 text-sm font-medium leading-5 text-blue-600 transition duration-150 ease-in-out border rounded-md cursor-pointer hover:text-blue-800">Previous</a>
        @endif

        {{-- Page Links --}}
        <span class="px-2 py-1 text-sm font-medium leading-5 text-gray-600">
            Page: {{ $posts->currentPage() }} of {{ $posts->lastPage() }} Records:
            {{ $posts->total() }}
        </span>

        {{-- Next Page Link --}}
        @if ($posts->hasMorePages())
            <a href="{{ $posts->nextPageUrl() }}"
                class="relative inline-flex items-center px-2 py-1 text-sm font-medium leading-5 text-blue-600 transition duration-150 ease-in-out border rounded-md cursor-pointer hover:text-blue-800">Next</a>
            <a href="{{ $posts->url($posts->lastPage()) }}"
                class="relative inline-flex items-center px-2 py-1 text-sm font-medium leading-5 text-blue-600 transition duration-150 ease-in-out border rounded-md cursor-pointer hover:text-blue-800">Last</a>
        @else
            <span class="px-2 py-1 text-sm font-medium leading-5 text-gray-400 cursor-not-allowed">Next</span>
            <span class="px-2 py-1 text-sm font-medium leading-5 text-gray-400 cursor-not-allowed">Last</span>
        @endif
    </nav>
</div>