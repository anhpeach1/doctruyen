@extends('layouts.parent')
@section('title', 'Chi tiết bài viết')
@section('main')
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
    <a href="{{ route('articles.index') }}">Quay laị trang chủ</a>
@endsection