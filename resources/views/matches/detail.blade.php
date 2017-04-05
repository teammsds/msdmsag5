@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-15 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">
        {!! Form::open(['url' => 'matches']) !!}
                        <h1> {{$tournament->to_name}}</h1>
        <table>
            <tbody>
            <tr>

            @foreach ($match->teams as $team)
                <table>
            <thead>
            <th>
                <h1 style="color:darkgoldenrod"> Team : {{ $team->tm_name}}</h1></th></thead>
                    <td> <h3 style="align:left"><u>Players</u></h3> </td>
                    @foreach ($team->players as $player)
                        <table>
                           
                <tr><td><h2><a href="{{url('/players/detail',$player->id)}}">{{ $player->p_fname}} </a></h2></td></tr>
                        </table>
                    @endforeach

                    <td> <h3 style="align:left"> Coach:  {{ $team->tm_coach}}</h3></td>
                </table>
            @endforeach

            </tr>
            <br><br>
            <tr><h3 style="color:blue">Referees</h3></tr>
            @foreach ($match->referees as $referee)
                <tr><h4 style="color:blue"><a href="#"> {{ $referee->r_fname}} </a></h4></tr>
            @endforeach


            </tbody>
        </table>


    </div>
                </div>
            </div>
        </div>
    </div>







@stop
