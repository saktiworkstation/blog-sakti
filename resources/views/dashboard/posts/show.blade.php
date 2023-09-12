@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2>{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my
                    posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        <span data-feather="x-circle"></span> Delete
                    </button>
                </form>

                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" height="400"
                            alt="{{ $post->category->name }}">
                    </div>
                @else
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="/img/{{ $post->category->name === 'Personal' ? 'hero.jpg' : 'programming.jpg' }}"
                            class="img-fluid mt-3" height="400" alt="{{ $post->category->name }}">
                    </div>
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
