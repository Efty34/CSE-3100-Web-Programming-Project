<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function gamePage()
    {
        return view('game.game-page');
    }
}
