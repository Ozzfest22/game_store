<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function getAll()
    {
        $categories = Category::select('id', 'name')->orderBy('id','ASC')->get();

        return $categories;
    }

    public function saveCategory(array $category)
    {
        $saved = Category::create($category);

        return $saved;
    }

    public function updateCategory($id, array $category)
    {
        $updated = Category::find($id)->update($category);

        return $updated;
    }
}