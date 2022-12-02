<?php

namespace App\Repositories;

use App\Models\Game;
use App\Repositories\Interfaces\GameRepositoryInterface;

class GameRepository implements GameRepositoryInterface
{
    public function getAll()
    {
        $games = Game::with('category')->get();

        return $games;
    }

    public function saveGame(array $game)
    {
        $saved = Game::create($game);

        return $saved;
    }

    public function updateGame($id, array $game)
    {
        $updated = Game::find($id)->update($game);

        return $updated;
    }
}