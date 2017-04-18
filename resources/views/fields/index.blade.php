@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style= "color: black">Fields</h4>
                      <a href="{{url('/fields/create')}}" class="btn btn-success">Enter New Field Details</a>
                      </div>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Field Number</th>
            <th>Field Name</th>
            <th>Field Address</th>
            <th>Field Owner Organization</th>
			<th>Contact Name</th>
            <th>Contact Email</th>
			<th>Contact Phone</th>
            <th>Description</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($fields as $field)
            <tr style="font-size:12px">
                <td>{{ $field->f_number }}</td>
                <td>{{ $field->f_name }}</td>
                <td>
                    <table>
                        <tr><td>{{ $field->f_street }}</td></tr>
                        <tr><td>{{ $field->f_city }}</td></tr>
                        <tr><td>{{ $field->f_state }}</td></tr>
                        <tr><td>{{ $field->f_zip }}</td></tr>
                        </table>
                </td>
                <td>{{ $field->f_oworg }}</td>
                <td>{{ $field->f_conname }}</td>
                <td>{{ $field->f_conemail }}</td>
                <td>{{ $field->f_conphone }}</td>
                <td>{{ $field->f_notes }}</td>
                <td><a  href="{{url('fields',$field->id)}}" class="btn btn-primary btn-sm">View</a></td>
                <td><a href="{{route('fields.edit',$field->id)}}" class="btn btn-warning btn-sm">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['fields.destroy', $field->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
    <a href="{{action('Excelcontroller@exportfields')}}" class="btn btn-primary btn-sm btn-info">Export to excel</a>
            </div>


        </div>
    </div>
</div>
@endsection


