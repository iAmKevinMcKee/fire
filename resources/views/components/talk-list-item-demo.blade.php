<li>
    <a href="{{route('talks.show', 1)}}" class="block hover:bg-gray-50">
        <div class="flex items-center px-4 py-4 sm:px-6">
            <div class="min-w-0 flex-1 flex items-center">
                <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                    <div>
                        <p class="text-sm font-medium text-indigo-600 truncate">Talk Name</p>
                        <p class="mt-2 flex items-center text-sm text-gray-500">
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="truncate">Speaker Name</span>
                        </p>
                    </div>
                    <div class="hidden md:flex">
                        <div class="flex items-center">
                            <p class="text-sm text-gray-500">
                                Attended on <span class="text-gray-900">{{now()->format('F d, Y')}}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <!-- Heroicon name: chevron-right -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </a>
</li>
