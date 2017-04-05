@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style= "color: black">Tournaments</h4>
                    @if (Auth::check())
                        @role('admin')
                      <a href="{{url('/tournaments/create')}}" class="btn btn-success">Enter New Tournament Details</a>
                      </div>
                @endrole
                @endif
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Tournament Number</th>
            <th>Tournament Name</th>
            <th>Start Date</th>
			<th>End Date</th>
            <th>Total teams</th>
            <th>Contact Name</th>
            <th>Contact Email</th>
			<th>Contact Phone</th>
            @if (Auth::check())
                @role('admin')
            <th colspan="3">Actions</th>
                @endrole
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach ($tournaments as $tournament)
            <tr>
                <td>{{ $tournament->to_number }}</td>
                <td>{{ $tournament->to_name }}</td>
                <td>{{ $tournament->to_sdate }}</td>
                <td>{{ $tournament->to_edate }}</td>
                <td>{{ $tournament->to_totteams }}</td>
                <td>{{ $tournament->to_cname }}</td>
                <td>{{ $tournament->to_cemail }}</td>
                <td>{{ $tournament->to_cphone }}</td>
                @if (Auth::check())
                    @role('admin')
                <td><a href="{{url('tournaments',$tournament->id)}}" class="btn btn-primary">View</a></td>
                <td><a href="{{route('tournaments.edit',$tournament->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['tournaments.destroy', $tournament->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
                    @endrole
                @endif

            </tr>
        @endforeach

        </tbody>

    </table>
            </div>
        </div>
    </div>
</div>
@endsection


