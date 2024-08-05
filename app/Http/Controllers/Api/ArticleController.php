<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getArticlesByCategory($category)
    {
        // dd($category);
        $articles = Article::where('category_id', $category)->get();

        return response()->json($articles);
    }

    // Lấy chi tiết một tin
    public function getArticlesDetail($id)
    {
        $article = Article::findOrFail($id);

        return response()->json($article);
    }
}
