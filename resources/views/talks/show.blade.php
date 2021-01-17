<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Talk Name
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <main>
                <!-- Page header -->
                <div
                    class="max-w-3xl mx-auto px-4 sm:px-6 md:flex md:items-center md:justify-between md:space-x-5 lg:max-w-7xl lg:px-8">
                    <div class="flex items-center space-x-5">
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900">Talk Name</h1>
                            <p class="text-sm font-medium text-gray-500">Speaker:
                                <span class="text-gray-900">John Doe</span>
                            </p>
                            <p class="text-sm font-medium text-gray-500">Attended on:
                                <span class="text-gray-900">August 25, 2020</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
                    <div class="space-y-6 lg:col-start-1 lg:col-span-2">

                        <!-- Comments-->
                        <section aria-labelledby="notes-title">
                            <div class="bg-white shadow sm:rounded-lg sm:overflow-hidden">
                                <div class="divide-y divide-gray-200">
                                    <div class="px-4 py-5 sm:px-6">
                                        <h2 id="notes-title" class="text-lg font-medium text-gray-900">Comments</h2>
                                    </div>
                                    <div class="px-4 py-6 sm:px-6">
                                        <ul class="space-y-8">
                                            <li>
                                                <div class="flex space-x-3">
                                                    <div class="flex-shrink-0">
                                                        <img class="h-10 w-10 rounded-full"
                                                             src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                             alt="">
                                                    </div>
                                                    <div>
                                                        <div class="text-sm">
                                                            <a href="#" class="font-medium text-gray-900">Leslie
                                                                Alexander</a>
                                                        </div>
                                                        <div class="mt-1 text-sm text-gray-700">
                                                            <p>Ducimus quas delectus ad maxime totam doloribus
                                                                reiciendis ex. Tempore dolorem maiores. Similique
                                                                voluptatibus tempore non ut.</p>
                                                        </div>
                                                        <div class="mt-2 text-sm space-x-2">
                                                            <span class="text-gray-500 font-medium">4d ago</span>
                                                            <span class="text-gray-500 font-medium">&middot;</span>
                                                            <button type="button" class="text-gray-900 font-medium">
                                                                Reply
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="flex space-x-3">
                                                    <div class="flex-shrink-0">
                                                        <img class="h-10 w-10 rounded-full"
                                                             src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                             alt="">
                                                    </div>
                                                    <div>
                                                        <div class="text-sm">
                                                            <a href="#" class="font-medium text-gray-900">Michael
                                                                Foster</a>
                                                        </div>
                                                        <div class="mt-1 text-sm text-gray-700">
                                                            <p>Et ut autem. Voluptatem eum dolores sint necessitatibus
                                                                quos. Quis eum qui dolorem accusantium voluptas
                                                                voluptatem ipsum. Quo facere iusto quia accusamus veniam
                                                                id explicabo et aut.</p>
                                                        </div>
                                                        <div class="mt-2 text-sm space-x-2">
                                                            <span class="text-gray-500 font-medium">4d ago</span>
                                                            <span class="text-gray-500 font-medium">&middot;</span>
                                                            <button type="button" class="text-gray-900 font-medium">
                                                                Reply
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="flex space-x-3">
                                                    <div class="flex-shrink-0">
                                                        <img class="h-10 w-10 rounded-full"
                                                             src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                             alt="">
                                                    </div>
                                                    <div>
                                                        <div class="text-sm">
                                                            <a href="#" class="font-medium text-gray-900">Dries
                                                                Vincent</a>
                                                        </div>
                                                        <div class="mt-1 text-sm text-gray-700">
                                                            <p>Expedita consequatur sit ea voluptas quo ipsam
                                                                recusandae. Ab sint et voluptatem repudiandae voluptatem
                                                                et eveniet. Nihil quas consequatur autem. Perferendis
                                                                rerum et.</p>
                                                        </div>
                                                        <div class="mt-2 text-sm space-x-2">
                                                            <span class="text-gray-500 font-medium">4d ago</span>
                                                            <span class="text-gray-500 font-medium">&middot;</span>
                                                            <button type="button" class="text-gray-900 font-medium">
                                                                Reply
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
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
                                            <form action="#">
                                                <div>
                                                    <label for="comment" class="sr-only">About</label>
                                                    <textarea id="comment" name="comment" rows="3"
                                                              class="shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-gray-300 rounded-md"
                                                              placeholder="Add a note"></textarea>
                                                </div>
                                                <div class="mt-3 flex justify-end">
                                                    <button type="submit"
                                                            class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                        Comment
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <section aria-labelledby="timeline-title" class="lg:col-start-3 lg:col-span-1">
                        <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
                            <h2 id="timeline-title" class="text-lg font-medium text-gray-900">Attendees</h2>

                            <!-- Activity Feed -->
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <ul class="divide-y divide-gray-200 pt-4">
                                <li class="py-4 flex">
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Calvin Hawkins</p>
                                        <p class="text-sm text-gray-500">calvin.hawkins@example.com</p>
                                    </div>
                                </li>

                                <li class="py-4 flex">
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Kristen Ramos</p>
                                        <p class="text-sm text-gray-500">kristen.ramos@example.com</p>
                                    </div>
                                </li>

                                <li class="py-4 flex">
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Ted Fox</p>
                                        <p class="text-sm text-gray-500">ted.fox@example.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
