<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $category = Category::query()->paginate(5);
        // dd($user);
        return view('admin.categorys.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categorys.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::query()->create($request->all());
        return redirect()->route('category.index')->with('success', 'Thêm thể loại thành công ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('admin.categorys.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categorys.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('category.index')->with('success', 'Sửa thể loại thành công ');

        // return back();
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Category    $category)
    {
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Xóa thể loại thành công ');
    }
}
