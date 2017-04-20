@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <h4 style="color:black">My Matches</h4>
                </div>
         <hr>       
        <table class="table table-bordered table-hover">
            <thead >
            <tr class="bg-info">
            <th>Match Number</th>
            <th>Tournament Name</th>
            </tr>
            </thead>
            <tbody >
            
                @foreach ($team->matches as $match)
                    <tr style="font-size:12px " >
                    <td>{{ $match->m_number}}</td>
                    <td>{{$match->tournament->to_name}}</td>
                    </tr>
            @endforeach
            </tr>
            
            </tbody>
        </table>
         <div>
            <a href="{{url('/matches')}}" class="btn btn-primary btn-sm">Back</a>
        </div>
                </div>
             </div>
         </div>
    </div>       
</div>

@stop
