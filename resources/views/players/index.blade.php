@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style= "color: black">Players</h4>
                      <a href="{{url('/players/create')}}" class="btn btn-success">Add New Player</a>
                      </div>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead style="font-size:12px">
        <tr class="bg-info">
            <th>Player Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Street</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Status</th>
            <th>School Id</th>
            <th>Team Id</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($players as $player)
            <tr style="font-size:11px">
            
                <td>{{ $player->p_number }}</td>
                <td>{{ $player->p_fname }}</td>
                 <td>{{ $player->p_lname }}</td>
                <td>{{ $player->p_street }}</td>
                <td>{{ $player->p_city }}</td>
                <td>{{ $player->p_state }}</td>
                <td>{{ $player->p_zip }}</td>
                <td>{{ $player->p_email }}</td>
                <td>{{ $player->p_phone }}</td>
                <td>{{ $player->p_estatus }}</td>
                <td>{{ $player->school->s_number }}</td>
                <td>{{ $player->team->tm_number }}</td>
                <td><a href="{{url('players',$player->id)}}" class="btn btn-primary btn-sm">View</a></td>
                <td><a href="{{route('players.edit',$player->id)}}" class="btn btn-warning btn-sm">update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['players.destroy', $player->id],'onsubmit' => 'return confirm("Are you sure you want to delete?")']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
    <a href="{{action('Excelcontroller@exportplayers')}}" class="btn btn-primary btn-info btn-sm">Export to excel</a>

    </div>
        </div>
    </div>
</div>
@endsection
