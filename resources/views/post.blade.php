@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <p>By. <a href="/posts?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="/posts?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                </p>
                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" height="400"
                            alt="{{ $post->category->name }}">
                    </div>
                @else
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="/img/{{ $post->category->name === 'Personal' ? 'hero.jpg' : 'programming.jpg' }}"
                            class="img-fluid" height="400" alt="{{ $post->category->name }}">
                    </div>
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="d-block mt-3">Back To Posts</a>
            </div>
        </div>
    </div>
@endsection
