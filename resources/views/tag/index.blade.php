<x-layout :title="$pageTitle">
    @foreach($tags as $tag)
        <h2 class="text-2xl font-bold">{{ $tag['title'] }}</h2>
    @endforeach
</x-layout>
