<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use App\Repositories\Interfaces\GameRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\GameSaveRequest;
use App\Http\Requests\GameUpdateRequest;

class GameController extends Controller
{
    private $gameRepository;

    public function __construct(GameRepositoryInterface $gameRepository)
    {
        $this->gameRepository = $gameRepository;
    }


    public function getGames()
    {
        $games = $this->gameRepository->getAll();

        $categories = Category::pluck('name', 'id')->toArray();

        return view('games.index', compact('games', 'categories'));
    }

    public function saveGame(GameSaveRequest $request)
    {

        $game = new Game();

        $game->name = $request->get('name');
        $game->price = $request->get('price');
        $game->id_category = $request->get('category');

        $this->gameRepository->saveGame($game->toArray());

        return redirect()->route('getGames');
    }

    public function updateGame(GameUpdateRequest $request, Game $game)
    {
        $newGame = new Game();

        $newGame->name = $request->get('name');
        $newGame->price = $request->get('price');
        $newGame->id_category = $request->get('category');

        $this->gameRepository->updateGame($game->id, $newGame->toArray());

        return redirect()->route('getGames');
    }
}
