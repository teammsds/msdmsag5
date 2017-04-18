<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\User;
use App\Match;
use App\Tournament;
use App\Field;
use App\Team;
use App\Referee;

class MatchController extends Controller
{
    //
    public function index()
    {
        //
        $matches=Match::all();
        return view('matches.index',compact('matches'));
    }

    public function show($id)
    {

        $match = Match::findOrFail($id);

        return view('matches.show',compact('match'));
    }


    public function create()
    {

        $fields = Field::lists('f_name','id');
        $tournaments = Tournament::lists('to_name','id');
        $teams = Team::lists('tm_name','id');
        $referees = Referee::lists('r_fname','id');
        return view('matches.create', compact('fields','tournaments','teams','referees'));
    }

    public function detail(Request $request,$id)
    {
        $match = Match::findOrFail($id);
        $ids=$match->tournament_id;
        $tournament = Tournament::findOrFail($ids);
        return view('matches.detail',compact('match','tournament'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $match= new Match($request->all());
        $match->save();
        $match->referees()->attach($request['id1']);
        $match->referees()->attach($request['id2']);
        $match->teams()->attach($request['m_homeid']);
        $match->teams()->attach($request['m_guestid']);
        return redirect('matches');
    }

    public function edit($id)
    {
        $match=Match::find($id);
        return view('matches.edit',compact('match'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //
        $match= new Match($request->all());
        $match=Match::find($id);
        $match->update($request->all());
        return redirect('matches');
    }

    public function destroy($id)
    {
        Match::find($id)->delete();
        return redirect('matches');
    }

}
