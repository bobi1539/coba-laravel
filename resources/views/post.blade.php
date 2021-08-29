@extends("layouts.main")

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card card-body shadow-sm">
                <h2>{{ $post->title }}</h2>

                <p>
                    By <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>
                
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary mt-3 col-md-3" href="/posts">Back to Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection