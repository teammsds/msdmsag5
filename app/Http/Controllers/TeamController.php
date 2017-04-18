<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Team;
use App\School;

class TeamController extends Controller
{
    public function index()
    {
        //
        $teams=Team::all();
        return view('teams.index',compact('teams'));
    }

    public function show($id)
    {

        $team = Team::findOrFail($id);

        return view('teams.show',compact('team'));
    }


    public function create()
    {

           // $schools = School::lists('s_name','id');
        $schools = School::lists('s_name','id');
          
        return view('teams.create', compact('schools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $team= new Team($request->all());
        $team->save();

        return redirect('teams');
    }

    public function edit($id)
    {
        $team=Team::find($id);
        return view('teams.edit',compact('team'));
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
        $team= new Team($request->all());
        $team=Team::find($id);
        $team->update($request->all());
        return redirect('teams');
    }

    public function destroy($id)
    {
        Team::find($id)->delete();
        return redirect('teams');
    }
}
