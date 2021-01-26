<div x-show="addTalk"
     class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
    <form method="POST" action="{{ route('talks.store') }}" class="grid grid-cols-7 gap-x-4">
        @csrf
        <div class="col-span-2">
            <label for="name" class="block text-sm font-medium text-gray-700">Talk Name</label>
            <div class="mt-1">
                <input type="text" name="name" id="name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="ex: Hotwire in Laravel" aria-describedby="name-description">
            </div>
        </div>
        <div class="col-span-2">
            <label for="speaker" class="block text-sm font-medium text-gray-700">Speaker</label>
            <div class="mt-1">
                <input type="text" name="speaker" id="speaker" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="ex: Tony Messias" aria-describedby="speaker-description">
            </div>
        </div>
        <div class="col-span-2">
            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
            <div class="mt-1">
                <input type="date" name="date" id="date" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" aria-describedby="date-description">
            </div>
        </div>
        <div class="flex flex-center justify-end items-end">
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Add Event
            </button>
        </div>
    </form>
</div>
