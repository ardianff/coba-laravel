@extends('layouts.main')

@section('container')
<article>
<h2>{{ $post->title }}</h2>
<p>Di Posting Oleh Ardian, Kategori : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
{!! $post->body !!}
</article>
<br>
<a href="/blog" class="btn btn-primary">Back</a>
@endsection
