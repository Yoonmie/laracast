<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">


<body>
    {{-- <article>
        <h1><a href="/posts/my-first-post">My First Blog</a></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, obcaecati quibusdam consectetur voluptate facilis unde quos ullam at? Officiis consectetur dolorum adipisci magni minima architecto rem tempore harum corporis tempora.</p>
    </article>

    <article>
        <h1><a href="/posts/my-second-post">My Second Blog</a></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, obcaecati quibusdam consectetur voluptate facilis unde quos ullam at? Officiis consectetur dolorum adipisci magni minima architecto rem tempore harum corporis tempora.</p>
    </article>

    <article>
        <h1><a href="/posts/my-third-post">My Third Blog</a></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, obcaecati quibusdam consectetur voluptate facilis unde quos ullam at? Officiis consectetur dolorum adipisci magni minima architecto rem tempore harum corporis tempora.</p>
    </article> --}}
    @foreach ( $posts as $post)
        <article>
            <a href="/posts/{{ $post->slug }}">
                <h1>{{ $post->title }}</h1>
            </a>
            
            <div>{{ $post->excerpt }}</div>
            
        </article>
    @endforeach
</body>