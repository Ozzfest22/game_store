<?php

namespace App\Repositories\Interfaces;

interface CategoryRepositoryInterface
{
    public function getAll();

    public function saveCategory(array $category);

    public function updateCategory($id, array $category);
}