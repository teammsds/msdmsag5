@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style= "color: black">Leader Board</h4>
                      </div>
    <hr>
    <table class="table  table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Team Name</th>
            <th>Win</th>
            <th>Draw</th>
            <th>Loss</th>
            <th>Goals</th>
            <th>Points</th>
        </tr>
            </table>

    @role('admin')
    <a href="#" class="btn btn-primary btn-info btn-sm">Export to excel</a>
    @endrole

            </div>
        </div>
    </div>
</div>
 @endsection



