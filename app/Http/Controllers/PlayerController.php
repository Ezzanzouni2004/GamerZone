<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Tournament;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::with('tournament')->get();
        return view('players.index', compact('players'));
    }

    public function create()
    {
        $tournaments = Tournament::all();
        return view('players.create', compact('tournaments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:players,email',
            'tournament_id' => 'required|exists:tournaments,id',
        ]);

        Player::create($request->all());

        return redirect()->route('players.index')->with('success', 'Joueur ajouté.');
    }
}
