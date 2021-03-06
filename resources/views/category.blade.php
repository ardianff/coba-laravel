@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category : {{ $category }} </h1>
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4" >
        <a href="/post/{{ $post->slug }}" class="text-decoration-none"><h2>{{ $post->title }}</h2></a>
        <p>Author <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>, Category : <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
            {{ $post->category->name }}</a></p>
        <p style="text-align:justify">{!! $post->excerpt !!}</p>
        <a class="text-decoration-none" href="/post/{{ $post->slug }}">Read More...</a>
    </article>
    @endforeach
@endsection
