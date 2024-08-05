<?php

namespace App\Http\Controllers;

use App\Events\ArticleViewed;
use App\Models\Article;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function index()
    {
        $categoryAll = Category::whereNull('parent_id')->with('children')->get();
        $categoryOne = Category::whereNotNull('parent_id')->get();
        $article = Article::query()->orderByDesc('created_at')->get();
        $gocnhin = Article::query()->orderBy(DB::raw('RAND()'))->take(5)->get();
        $articletime = Article::query()->orderByDesc('created_at')->get();
        $articleview = Article::query()->orderByDesc('views')->get();
        $outstanding = Article::query()->where('status', '=', '1')->latest('created_at')->get();
        $cateAllAcrticle = Category::query()->whereNull('parent_id')->with('articleCategory')->paginate(3);
        return view('client.home', compact(
            'categoryAll',
            'categoryOne',
            'article',
            'gocnhin',
            'articletime',
            'articleview',
            'outstanding',
            'cateAllAcrticle',
        ));
    }
    public function category(Category $category)
    {

        $categoryAll = Category::whereNull('parent_id')->with('children')->get();
        $cateParent = Category::where('id', $category->id)->with('articleCategory', 'children')->first();
        $articletime = Article::query()->orderByDesc('created_at')->get();
        $articleview = Article::query()->orderByDesc('views')->get();
        $cateAllAcrticle = Category::query()->whereNull('parent_id')->with('articleCategory')->paginate(5);
        return view('client.category', compact(
            'categoryAll',
            'cateParent',
            'articletime',
            'articleview',
            'cateAllAcrticle',
        ));
    }
    public function categoryChild(Category $categoryChild)
    {
        $categoryAll = Category::whereNull('parent_id')->with('children')->get();
        $cateParent = Category::where('id', $categoryChild->parent_id)->with('articleCategory', 'children')->first();
        // $cateChild = Category::where('id', $categoryChild->id)->with('articleCategory', 'children')->first();
        $cateChildArticle = Category::where('id', $categoryChild->id)->with('article')->first();
        $cateAllAcrticle = Category::query()->whereNull('parent_id')->with('articleCategory')->paginate(5);
        // // $Article = Article::query()->where('category__one_id', $category_One->id)->with('category_one')->latest('id')->
        $articletime = Article::query()->orderByDesc('created_at')->get();
        $articleview = Article::query()->orderByDesc('views')->get();
        return view('client.categoryChild', compact(
            'categoryAll',
            'cateParent',
            'cateChildArticle',
            'categoryChild',
            'articletime',
            'articleview',
            'cateAllAcrticle',
        ));
    }
    public function article(Article $article)
    {
        // dd($article);
        $categoryAll = Category::whereNull('parent_id')->with('children')->get();
        // $articleDetail1 = Article::query()->where('id', $article->id)->with(['category', 'user'])->first();
        $articleDetail = Article::join('categories', 'articles.category_id', '=', 'categories.id')
            ->join('users', "users.id", '=', 'articles.user_id')
            ->select('articles.*', 'categories.*', 'categories.name as namecate', 'users.*', 'users.name as nameuser')
            ->where('articles.id', $article->id)
            ->first();

        $articleChild = Article::where([['category_id', $article->category_id], ['id', '<>', $article->id]])->get();
        $articletime = Article::query()->orderByDesc('created_at')->limit(8)->get();
        $articleview = Article::query()->orderByDesc('views')->get();
        event(new ArticleViewed($article));
        return view('client.article', compact(
            'categoryAll',
            'articleDetail',
            'articleview',
            'articletime',
            'articleChild'
        ));
    }
    public function seacher(Request $request)
    {
        $categoryAll = Category::whereNull('parent_id')->with('children')->get();
        // $categoryChilde = Category::whereNotNull('parent_id')->get();
        //Gắn dữ liệu vào
        $inputKey = $request->old('key', $request->input('key'));
        $inputTime = $request->old('time', $request->input('time'));
        $inputCate = $request->old('category', $request->input('category'));
        // Lấy dữ liệu
        $valueKey =  $request->input('key');
        $time =  $request->input('time');
        $catechilde =  $request->input('category');

        if ($time == 'now') {
            // Lấy thời gian hiện tại
            $timeOver = Carbon::now();
        } elseif ($time == 'dayAgo') {
            // Lấy thời gian 1 ngày trước
            $timeOver = Carbon::now()->subDay();
        } elseif ($time == 'weekAgo') {
            // Lấy thời gian 1 tuần trước
            $timeOver = Carbon::now()->subWeek();
        } elseif ($time == 'monthAgo') {
            // Lấy thời gian 1 tháng trước
            $timeOver = Carbon::now()->subMonth();
        } elseif ($time == 'monthAgo') {
            // Lấy thời gian 1 năm trước
            $timeOver = Carbon::now()->subYear();
        } else {
            $timeOver = [];
        }
        // if ($time != null && $catechilde != null) {
        //     $article = Category::find($catechilde)->articleCategory()
        //         ->where('articles.title', 'like', '%' . $valueKey . '%')
        //         ->whereBetween('articles.created_at', [$timeOver, Carbon::now()])
        //         ->latest()
        //         ->get();
        // } elseif ($time != null && $catechilde == null) {
        //     $article = Article::where('articles.title', 'like', '%' . $valueKey . '%')
        //         ->whereBetween('articles.created_at', [$timeOver, Carbon::now()])
        //         ->latest()
        //         ->get();
        // } elseif ($time == null && $catechilde != null) {
        //     $article = Category::find($catechilde)->articleCategory()
        //         ->where('articles.title', 'like', '%' . $valueKey . '%')
        //         // ->whereBetween('articles.created_at', [$timeOver, Carbon::now()])
        //         ->latest()
        //         ->get();
        // } else {
        //     $article = Article::where('articles.title', 'like', '%' . $valueKey . '%')
        //         ->latest()
        //         ->get();
        // }
        $article  = Article::query()
            ->when($valueKey, function ($query, $valueKey) {
                return $query->where('articles.title', 'like', "%{$valueKey}%")
                    ->where('articles.content', 'like', "%{$valueKey}%");
            })
            ->when($timeOver, function ($query, $timeOver) {
                return $query
                    ->whereBetween('articles.created_at', [$timeOver, Carbon::now()]);
            })
            ->when($catechilde, function ($query, $catechilde) {
                $categoryId = Category::where('parent_id', $catechilde)->pluck('id');
                return $query->whereIn('category_id', $categoryId);
            })->latest()
            ->get();;
        return view('client.seacher', compact(
            'categoryAll',
            'article',
            'inputKey',
            'inputTime',
            'inputCate',
            'valueKey',
            'time',
            'catechilde'
        ));
    }
}
