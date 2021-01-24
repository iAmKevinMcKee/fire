<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Talks
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="min-h-screen bg-gray-100">
                <div
                    x-data="{addTalk: false}"
                    class="bg-white shadow overflow-hidden sm:rounded-md">
                    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
                        <div class="-ml-4 -mt-2 flex items-center justify-between flex-wrap sm:flex-nowrap">
                            <div class="ml-4 mt-2">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Here's What We're Learning
                                </h3>
                            </div>
                            <div class="ml-4 mt-2 flex-shrink-0">
                                <button
                                    x-on:click="addTalk = !addTalk"
                                    x-on:click.away="addTalk = false"
                                    type="button" class="relative inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Add New Talk
                                </button>
                            </div>
                        </div>
                    </div>
                    <div x-show="addTalk"
                         class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
                        <div class="grid grid-cols-7 gap-x-4">
                            <div class="col-span-2">
                                <label for="talk-name" class="block text-sm font-medium text-gray-700">Talk Name</label>
                                <div class="mt-1">
                                    <input type="text" name="talk-name" id="talk-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com" aria-describedby="talk-name-description">
                                </div>
                            </div>
                            <div class="col-span-2">
                                <label for="email" class="block text-sm font-medium text-gray-700">Speaker</label>
                                <div class="mt-1">
                                    <input type="text" name="email" id="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com" aria-describedby="email-description">
                                </div>
                            </div>
                            <div class="col-span-2">
                                <label for="email" class="block text-sm font-medium text-gray-700">Date</label>
                                <div class="mt-1">
                                    <input type="date" name="email" id="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com" aria-describedby="email-description">
                                </div>
                            </div>
                            <div class="flex flex-center justify-end items-end">
                                <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Add Event
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="divide-y divide-gray-200">
                        <x-talk-list-item />
                        <x-talk-list-item />
                        <x-talk-list-item />
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
