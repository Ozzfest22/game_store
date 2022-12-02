<?php

namespace App\Repositories\Interfaces;

interface GameRepositoryInterface
{
    public function getAll();

    public function saveGame(array $game);

    public function updateGame($id, array $game);
}