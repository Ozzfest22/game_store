<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getCategories()
    {
        $categories = $this->categoryRepository->getAll();

        return view('categories.index', compact('categories'));
    }

    public function saveCategory(Request $request)
    {
        Category::create($request->all());

        return redirect()->route('getCategories');
    }

    public function updateCategory(Request $request, Category $category)
    {
        $category->update($request->all());

        return redirect()->route('getCategories');
    }
}
