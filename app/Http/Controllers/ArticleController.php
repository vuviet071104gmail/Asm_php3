<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $article = Article::query()->orderByDesc('created_at')->with('category', 'user')->paginate(10);
        return view('admin.articles.index', compact('article',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::query()->whereNotNull('parent_id')->pluck('name', 'id')->all();
        $user = User::query()->where('type','=','admin')->pluck('name', 'id')->all();
        dd($user);
        return view('admin.articles.create', compact('category', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest  $request)
    {
        // dd($request->input('status'));
        $data = $request->except('img');

        if ($request->hasFile('img')) {



            $pathFile = Storage::putFile('article', $request->file('img'));
            $data['img']  = 'storage/' . $pathFile;
        }
        Article::query()->create($data);
        return redirect()->route('article.index')->with('success', 'Thêm bài viết thành công ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('admin.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $category = Category::query()->pluck('name', 'id')->all();
        $user = User::query()->pluck('name', 'id')->all();
        return view('admin.articles.edit', compact('category', 'user', 'article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreArticleRequest $request, Article $article)
    {
        // dd($request->input('status'));
        $data = $request->except('img');
        if ($request->input('status') == null) {
            $data['status'] = 0;
        }

        if ($request->hasFile('img')) {
            $pathFile = Storage::putFile('article', $request->file('img'));
            $data['img']  = 'storage/' . $pathFile;
        }

        $currentImg = $article->img;
        $article->update($data);
        if ($request->hasFile('img_thumb') && $currentImg && file_exists(public_path($currentImg))) {
            unlink(public_path($currentImg));
        }
        return redirect()->route('article.index')->with('success', 'Sửa bài viết thành công ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        if ($article->img && file_exists(public_path($article->img))) {
            unlink(public_path($article->img));
        }
        return redirect()->route('article.index')->with('success', 'Xóa bài viết thành công ');
    }
}
