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
                    <x-add-talk-card-header />
                    <x-add-talk-form />
                    <ul class="divide-y divide-gray-200">
                        <x-talk-list-item-demo />
                        <x-talk-list-item-demo />
                        <x-talk-list-item-demo />
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
