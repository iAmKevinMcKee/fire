<form method="POST" action="{{route('talk_comment.store', 1)}}">
    @csrf
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
