<x-layout :title="$pageTitle">
    <div>
        <h2 class="text-2xl font-bold">{{ $comment->author }},</h2>
        <p class="text-md text-blue-700">{{ $comment->content }}</p>
        <p class="text-sm text-gray-700">in {{ $comment->post->title }}</p>
    </div>
</x-layout>
