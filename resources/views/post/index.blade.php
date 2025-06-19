<x-layout :title="$pageTitle">
    @if(session()->has('success'))
        <div class="rounded-lg bg-green-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <div class="ml-3 w-full">
                    <h3 class="text-sm font-semibold text-green-800">{{ session()->get('success') }}</h3>
                </div>
            </div>
        </div>
    @endif
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/posts/create" type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</a>
    </div>
    @foreach($posts as $post)
        <div class="flex items-center justify-between border-b border-gray-200 py-2 my-4">
            <div>
                <h2 class="text-2xl font-bold"><a href="/posts/{{ $post->id }}"> {{ $post['title'] }} </a></h2>
                <p class="text-sm text-gray-600">{{ $post['author'] }}</p>
            </div>
            <div>
                <a href="/posts/{{ $post->id }}/edit" class="text-sm/6 font-semibold text-gray-900 hover:text-indigo-600">Edit</a>
                <form action="/posts/{{ $post->id }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-sm/6 font-semibold text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>

                </form>
            </div>
        </div>
    @endforeach

    {{ $posts->links() }}
</x-layout>
