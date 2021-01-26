<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Talk Name
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <main>
                <x-talk-header-demo/>

                <div
                    class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
                    <div class="space-y-6 lg:col-start-1 lg:col-span-2">

                        <x-comments-section>
                            <x-slot name="comments">
                                <x-comment-demo />
                                <x-comment-demo />
                                <x-comment-demo />
                            </x-slot>
                            <x-slot name="form">
                                <x-comment-form/>
                            </x-slot>

                        </x-comments-section>

                    </div>

                    <x-attendees-section/>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
