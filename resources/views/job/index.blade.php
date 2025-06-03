<div>
    <h1>hello world</h1>
    @foreach($jobs as $job)
        <div>
            <h2>{{ $job['title'] }}</h2>
            <h3>{{ $job['salary'] }}</h3>
        </div>
    @endforeach
</div>
