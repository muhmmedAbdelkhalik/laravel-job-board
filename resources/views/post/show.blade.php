<x-layout :title="$pageTitle">
    <div>
        <p class="text-md text-black-700 font-bold">{{ $post['author'] }}</p>
        <p class="text-md text-indigo-700">{{ $post['body'] }}</p>
        <div class="max-w-auto mx-auto mt-4 space-y-6">
            @foreach($post->comments as $comment)
                <div class="border border-gray-200 rounded-lg p-4 shadow-sm">
                    <div class="text-sm font-semibold text-gray-800">{{ $comment->author }}</div>
                    <p class="mt-1 text-sm text-gray-700">{{ $comment->content }}</p>
                </div>
            @endforeach
        </div>

        <form method="POST" action="/comments">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id  }}">
            <div class="max-w-auto mx-auto mt-6 space-y-4">
                <!-- Name input -->
                <div>
                    <label for="author" class="block text-base font-medium text-gray-900 mb-1">
                        Name
                    </label>
                    <input
                        type="text"
                        id="author"
                        name="author"
                        class="{{ $errors->has('author') ? 'border-red-600' : '' }} block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2"
                        placeholder="Enter your name"
                    />
                    @error('author')
                    <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Comment textarea -->
                <div>
                    <label for="content" class="block text-base font-medium text-gray-900 mb-1">
                        Comment
                    </label>
                    <textarea
                        id="content"
                        name="content"
                        rows="4"
                        class="{{ $errors->has('author') ? 'border-red-600' : '' }} block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm resize-none p-3"
                        placeholder="Write your comment..."
                    ></textarea>
                    @error('content')
                    <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Comment
                </button>
            </div>
        </form>
    </div>
</x-layout>
