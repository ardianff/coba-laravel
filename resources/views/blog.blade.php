@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
    <article class="mb-5">
        <a href="/post/{{ $post->slug }}"><h2 class="btn btn-info">Judul : {{ $post->title }}</h2></a>
        {{-- <h5>Author : {{ $post->author}}</h5> --}}
        <p style="text-align:justify">{!! $post->excerpt !!}</p>
    </article>
    @endforeach
@endsection
