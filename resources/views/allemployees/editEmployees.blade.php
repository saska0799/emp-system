@extends('layout/layout')
@section('content')
<h1>Edit Employee</h1>
{{ Form::open(['action' => 'App\Http\Controllers\EmployeesController@store', 'method' => 'POST']) }}
<div class="my-3 row">
    {{Form::label('id', 'Id', ['class' => 'col-sm-2 col-form-label'])}}
    <div class="col-sm-10">
        {{Form::number('id', $employee->id, ['class' =>'form-control'])}}
    </div>
</div>
<div class="my-3 row">
    {{Form::label('department', 'Department', ['class' => 'col-sm-2 col-form-label'])}}
    <div class="col-sm-10">
        {{Form::text('department', $employee->department, ['class' =>'form-control'])}}
    </div>
</div>
<div class="my-3 row">
    {{Form::label('full_name', 'Full Name', ['class' => 'col-sm-2 col-form-label'])}}
    <div class="col-sm-10">
        {{Form::text('full_name', $employee->full_name, ['class' =>'form-control'])}}
    </div>
</div>
<div class="my-3 row">
    {{Form::label('email', 'Email', ['class' => 'col-sm-2 col-form-label'])}}
    <div class="col-sm-10">
        {{Form::email('email', $employee->email, ['class' =>'form-control'])}}
    </div>
</div>

{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Save', ['class'=>'btn btn-success'])}}
{!! Form::close() !!}
@endsection