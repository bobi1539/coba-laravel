@extends('dashboard.layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-lg-8">
                <div class="card card-body shadow-sm">
                    <h2>{{ $post->title }}</h2>
                    
                    <div class="row m-2">
                        <a href="/dashboard/posts" class="col-sm-2 btn btn-success btn-sm me-2">
                            <span data-feather="arrow-left"></span> Back 
                        </a>
                        <a href="" class="col-sm-2 btn btn-warning btn-sm me-2 text-white">
                            <span data-feather="edit"></span> Edit
                        </a>
                        <a href="" class="col-sm-2 btn btn-danger btn-sm">
                            <span data-feather="trash-2"></span> Delete
                        </a>
                    </div>

                    <img class="mt-3" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

                    <article class="my-3 fs-6">
                        {!! $post->body !!}
                    </article>
                </div>
            </div>
        </div>
    </div>

@endsection