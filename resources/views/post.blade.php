@extends('layouts.main')

@section('container')
<article>
<h2>{{ $post->title }}</h2>
<p>Author <a href="/author/{{ $post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a>, Kategori : <a class="text-decoration-none"href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
{!! $post->body !!}
</article>

<a href="/blog" class="mt-3 btn btn-primary">Back</a>
@endsection
