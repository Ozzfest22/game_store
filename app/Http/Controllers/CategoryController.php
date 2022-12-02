<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Http\Requests\CategorySaveRequest;
use App\Http\Requests\CategoryUpdateRequest;

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

    public function saveCategory(CategorySaveRequest $request)
    {
        
        $this->categoryRepository->saveCategory($request->all());

        return redirect()->route('getCategories');
    }

    public function updateCategory(CategoryUpdateRequest $request, Category $category)
    {
        
        $this->categoryRepository->updateCategory($category->id, $request->all());

        return redirect()->route('getCategories');
    }
}
