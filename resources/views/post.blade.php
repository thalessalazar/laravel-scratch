@extends('layout.base')

@section('content')
    <article>
        <h1>{{ $post->title }}</h1>
        <p>
            By <a href="{{ route('public.author', $post->author->username) }}">{{ $post->author->name }}</a> in <a
                href="{{ route('public.category', $post->category->slug) }}">{{ $post->category->name }}</a>
        </p>
        <div>
            {!! $post->body !!}
        </div>
    </article>

    <a href="{{ route('public.home') }}">Go back</a>
@endsection
