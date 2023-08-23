@if (session('message'))
    <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md my-4">
        <div class="flex items-center">
            <div class="w-6 h-6 mr-4 bg-green-500 rounded-full flex-shrink-0"></div>
            <div class="flex-1">
                {{ strtoupper(session('message')) }}
            </div>
            <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                data-dismiss="alert" aria-label="Close" onclick="this.parentElement.parentElement.style.display='none'">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.293 6.293a1 1 0 011.414 0L10 8.586l2.293-2.293a1 1 0 111.414 1.414L11.414 10l2.293 2.293a1 1 0 01-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 01-1.414-1.414L8.586 10 6.293 7.707a1 1 0 010-1.414z">
                    </path>
                </svg>
            </button>
        </div>
    </div>
@endif
@if (session('error'))
    <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md my-4">
        <div class="flex items-center">
            <div class="w-6 h-6 mr-4 bg-red-500 rounded-full flex-shrink-0"></div>
            <div class="flex-1">
                {{ strtoupper(session('error')) }}
            </div>
            <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                data-dismiss="alert" aria-label="Close" onclick="this.parentElement.parentElement.style.display='none'">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.293 6.293a1 1 0 011.414 0L10 8.586l2.293-2.293a1 1 0 111.414 1.414L11.414 10l2.293 2.293a1 1 0 01-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 01-1.414-1.414L8.586 10 6.293 7.707a1 1 0 010-1.414z">
                    </path>
                </svg>
            </button>
        </div>
    </div>
@endif
