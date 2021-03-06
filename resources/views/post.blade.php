@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>Author <a href="/blog?author={{ $post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a>, Category : <a class="text-decoration-none"href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                <article class="my-4 fs-6">
                    {!!  $post->body  !!}
                </article>

                <a href="/blog" class="mt-3 btn btn-primary">Back To Blog</a>
        </div>
    </div>
</div>

@endsection
