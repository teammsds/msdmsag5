@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
<h3>Update Match Details</h3>
{!! Form::model($match,['method' => 'PATCH','route'=>['matches.update',$match->id]]) !!}
                    @if (Auth::check())
                        @role('admin')
                    <div class="form-group">
                        {!! Form::label('m_number', 'Match Number:') !!}
                        {!! Form::text('m_number',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('m_date', 'Date:') !!}
                        {!! Form::text('m_date',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('m_time', 'Time:') !!}
                        {!! Form::text('m_time',null,['class'=>'form-control']) !!}
                    </div>
                        @endrole
                    @endif
                    <div class="form-group">
                        {!! Form::label('m_score', 'Score:') !!}
                        {!! Form::text('m_score',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('m_ref_com', 'Referee Comments:') !!}
                        {!! Form::text('m_ref_com',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('m_homeg', 'Home Goals:') !!}
                        {!! Form::text('m_homeg',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('m_guestg', 'Guest Goals:') !!}
                        {!! Form::text('m_guestg',null,['class'=>'form-control']) !!}

                    </div>


<div class="form-group">
    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
</div>
</div>
</div>
{!! Form::close() !!}
@stop
