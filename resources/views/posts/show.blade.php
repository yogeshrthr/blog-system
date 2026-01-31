@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('posts.index') }}" class="btn btn-secondary mb-3">
        ← Back to Posts
    </a>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>

            <p class="text-muted mb-2">
                By {{ $post->user->name }} |
                Views: {{ $post->views }} |
                {{ $post->created_at->format('M d, Y') }}
            </p>

            <hr>

            <p class="card-text">
                {!! nl2br(e($post->content)) !!}
            </p>
        </div>
    </div>
</div>
@endsection
