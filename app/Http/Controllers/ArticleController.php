<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//hiển thị form 
    {
        //echo "Đây là trang danh sách bài viết";
        //Có lấy dữ liệu gì không ,có 3 cách :ORM,Query Builder,Raw Query
        //ORM
        $articles = Article::all();//SELECT * FROM articles
        //Trả về view nào
          return view('articles.index',compact('articles'));//trả về view index trong thư mục articles
        // return view("articles.index", ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.add');//trả về view create trong thư mục articles
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Kiểm tra dữ liệu đầu vào
    $validateData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'author' => 'required',
    ], [
        'title.required' => 'Bạn cần nhập tiêu đề.',
        'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
        'content.required' => 'Bạn cần nhập nội dung.',
        'author.required' => 'Bạn cần nhập tên tác giả.',
    ]);

    // Lưu vào database
    Article::create($validateData);

    // Điều hướng về trang danh sách bài viết
    return redirect()->route('articles.index')->with('success', 'Bài viết đã được tạo thành công.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);//SELECT * FROM articles WHERE id = $id //lấy ra bài viết có id = $id
        return view('articles.detail',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)//sửa bài viết
    {
        $article = Article::find($id);//SELECT * FROM articles WHERE id = $id //lấy ra bài viết có id = $id
        return view('articles.edit',compact('article'));//trả về view edit trong thư mục articles
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        // Kiểm tra dữ liệu đầu vào và đặt thông báo lỗi bằng tiếng Việt
        $validatedData = $request->validate([//kiểm tra dữ liệu đầu vào 
            'title'   => 'required|max:255',
            'content' => 'required',
            'author'  => 'required',
        ], [
            'title.required'   => 'Bạn cần nhập tiêu đề.',
            'title.max'        => 'Tiêu đề không được vượt quá 255 ký tự.',
            'content.required' => 'Bạn cần nhập nội dung.',
            'author.required'  => 'Bạn cần nhập tên tác giả.',
        ]);
    
        // Cập nhật bài viết
        $article->update($validatedData);
    
        // Chuyển hướng về danh sách bài viết với thông báo thành công
        return redirect()->route('articles.index')->with('success', 'Bài viết đã được cập nhật thành công.');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);//SELECT * FROM articles WHERE id = $id //lấy ra bài viết có id = $id
        $article->delete();//xóa bài viết
        return redirect()->route('articles.index');
    }
}
