@extends('layouts.parent')
@section('title', 'Sửa bài viết')

@section('main')
<h1 class="text-center text-success text-uppercase mt-4">Cập nhật bài viết</h1>
<div class="container">
    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label" for="title">Tiêu đề</label>
            <input class="form-control @error('title') is-invalid @enderror" 
                   type="text" name="title" id="title" 
                   value="{{ old('title', $article->title) }}">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="content">Nội dung</label>
            <textarea class="form-control @error('content') is-invalid @enderror" 
                      name="content" id="content">{{ old('content', $article->content) }}</textarea>
            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="author">Tác giả</label>
            <input class="form-control @error('author') is-invalid @enderror" 
                   type="text" name="author" id="author" 
                   value="{{ old('author', $article->author) }}">
            @error('author')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-success" type="submit">Lưu lại</button>
    </form>
</div>
@endsection
