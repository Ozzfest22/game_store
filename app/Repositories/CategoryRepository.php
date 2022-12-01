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

}