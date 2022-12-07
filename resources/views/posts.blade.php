@extends('layout.base')

@section('content')
    @foreach ($posts as $post)
        <article>
            <h1> <a href="{{ route('public.post', $post->slug) }}">{{ $post->title }}</a></h1>
            <p>
                By <a href="{{ route('public.author', $post->author->username) }}">{{ $post->author->name }}</a> in <a
                    href="{{ route('public.category', $post->category->slug) }}">{{ $post->category->name }}</a>
            </p>
            <p>{{ $post->excerpt }}</p>
            <p>{{ $post->published_at }}</p>
        </article>
    @endforeach
@endsection
`
