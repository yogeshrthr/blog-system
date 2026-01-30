{{-- resources/views/posts/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blog Posts</h1>
    
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">
        Create New Post
    </a>
    
    @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ Str::limit($post->content, 200) }}</p>
                <p class="text-muted">
                    By {{ $post->user->name }} | 
                    Views: {{ $post->views }} |
                    {{ $post->created_at->diffForHumans() }}
                </p>
                <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-info">
                    Read More
                </a>
            </div>
        </div>
    @endforeach
    
    {{ $posts->links() }}
</div>
@endsection