<x-layout :title="$pageTitle">
    @foreach($comments as $comment)
        <div>
            <h2 class="text-2xl font-bold">{{ $comment['author'] }}</h2>
            <h3>{{ $comment['content'] }}</h3>
            <a href="/posts/{{ $comment->post->id }}">{{$comment->post->title}}</a>
        </div>
    @endforeach
    
</x-layout>
