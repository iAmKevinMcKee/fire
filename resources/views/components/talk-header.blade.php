<div
    class="max-w-3xl mx-auto px-4 sm:px-6 md:flex md:items-center md:justify-between md:space-x-5 lg:max-w-7xl lg:px-8">
    <div class="flex items-center space-x-5">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">{{$talk->name}}</h1>
            <p class="text-sm font-medium text-gray-500">Speaker:
                <span class="text-gray-900">{{$talk->speaker}}</span>
            </p>
            <p class="text-sm font-medium text-gray-500">Attended on:
                <span class="text-gray-900">{{$talk->date->format('F d, Y')}}</span>
            </p>
        </div>
    </div>
</div>
