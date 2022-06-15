@extends('layout/layout')
@section('content')
<h1>Edit Department</h1>
{{ Form::open(['action' => ['App\Http\Controllers\DepartmentsController@update',$department->id], 'method' => 'POST']) }}
<div class="my-3 row">
    {{Form::label('id', 'Id', ['class' => 'col-sm-2 col-form-label'])}}
    <div class="col-sm-10">
        {{Form::number('id', $department->id,['min'=>1000,'max'<=9999], ['class' =>'form-control'])}}
    </div>
</div>
<div class="my-3 row">
    {{Form::label('title', 'Title', ['class' => 'col-sm-2 col-form-label'])}}
    <div class="col-sm-10">
        {{Form::text('title', $department->name, ['class' =>'form-control'])}}
    </div>
</div>

{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Save', ['class'=>'btn btn-primary'])}}
@endsection