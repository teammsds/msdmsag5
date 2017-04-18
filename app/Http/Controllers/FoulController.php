<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Player;
use App\School;
use App\Team;
use App\Foul;
use App\Match;
class Foulcontroller extends Controller

{
    public function index()
    {
        //
        $players = Player::lists('p_fname','id');
        $matches = Match::lists('m_number','id');
        return view('referees.fouls', compact('players','matches'));
    }

    public function store(Request $request)
    {
        $foul= new foul($request->all());
        $foul->save();
        return redirect('fouls');
    }

}
