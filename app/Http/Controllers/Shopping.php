<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;

class Shopping extends Controller
{
    public function Shopping() {
        return view('Shopping');
    }
    public function showGames()
    {
        $games = Games::all();
        return view('shopping', compact('games'));
    }
}
