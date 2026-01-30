{{-- resources/views/posts/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Post</h1>
    
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="10" required></textarea>
        </div>
        
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="is_published" name="is_published" value="1">
            <label class="form-check-label" for="is_published">Publish immediately</label>
        </div>
        
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
@endsection