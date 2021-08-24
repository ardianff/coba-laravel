@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <a class="text-decoration-none" href="/post/{{ $post->slug }}"><h2>{{ $post->title }}</h2></a>
        <p>Author <a href="#" class="text-decoration-none">{{ $post->user->name }}</a>, Kategori : <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
            {{ $post->category->name }}</a></p>
        <p style="text-align:justify">{!! $post->excerpt !!}</p>

        <a class="text-decoration-none" href="/post/{{ $post->slug }}">Read More...</a>
    </article>
    @endforeach
@endsection
