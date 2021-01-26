<section aria-labelledby="notes-title">
    <div class="bg-white shadow sm:rounded-lg sm:overflow-hidden">
        <div class="divide-y divide-gray-200">
            <div class="px-4 py-5 sm:px-6">
                <h2 id="notes-title" class="text-lg font-medium text-gray-900">Comments</h2>
            </div>
            <div class="px-4 py-6 sm:px-6">
                <ul class="space-y-8">
                    {{ $comments }}
                </ul>
            </div>
        </div>
        <div class="bg-gray-50 px-4 py-6 sm:px-6">
            <div class="flex space-x-3">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full"
                         src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80"
                         alt="">
                </div>
                <div class="min-w-0 flex-1">
                    {{ $form }}
                </div>
            </div>
        </div>
    </div>
</section>
