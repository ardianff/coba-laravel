@extends('layouts.main')

@section('container')
<article>
<h2>{{ $post->title }}</h2>
{{-- <h5>{{ $post->author }}</h5> --}}
{!! $post->body !!}
</article>
<br>
<a href="/blog" class="btn btn-primary">Back</a>
@endsection
