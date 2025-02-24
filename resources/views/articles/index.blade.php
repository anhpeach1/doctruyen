@extends('layouts.parent')
@section('title', 'Phenikaa University')
@section('main')
<h3 class="text-center text-success text-uppercase mt- 4">Danh sách bài viết</h3>
<a href="{{ route('articles.create') }}" class = "btn btn-primary">Tạo bài viết mới</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tiêu đề bài viết</th>
      <!-- <th scope="col">Nội dung</th> -->
      <th scope="col">Tác giả</th>
      <th scope="col" colspan="3" class="text-center">Thao tác</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)
    <tr>
      <th scope="row">{{ $article->id }}</th>
      <td>{{ $article->title }}</td>
      <!-- <td>{{ $article->content}}</td> -->
      <td>{{ $article->author }}</td>
      <td>
            <a href="{{ route('articles.show',$article->id) }}" class="btn btn-success"><i class="bi bi-eye"></i></a>
      </td>
       <td>
            <a href="{{ route('articles.edit',$article->id) }}" class="btn btn-success"><i class="bi bi-pencil"></i></a>
       </td>
       <td>
            <!-- <a href=""><i class="bi bi-trash3"></i></a> -->
             <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $article->id }}">
                <i class="bi bi-trash3"></i>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="{{ $article->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Xoá bài viết</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc chắn muốn xoá bài viết có id: {{ $article->id }} không ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
@endsection