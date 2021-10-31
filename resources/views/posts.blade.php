<x-layout>
    @foreach ( $posts as $post)
        <article>
            <a href="/posts/{{ $post->slug }}">
                <h1>{!! $post->title !!}</h1>
            </a>

            <a href="/categories/{{ $post->category->slug }}">
                <p>{!! $post->category->name !!}</p>
            </a>
            
            <div>{{ $post->excerpt }}</div>
            
        </article>
    @endforeach
</x-layout>