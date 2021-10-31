<x-layout>
    <article>
        <h1>{!!  $post->title !!}</h1>

        <a href="/categories/{{ $post->category->slug }}">
            <p>{!! $post->category->name !!}</p>
        </a>
       <div>
           {!!  $post->body !!}
       </div>
    </article>
    <a href="/">Go Back</a>
    
</x-layout>