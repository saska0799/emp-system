@extends('layout/layout')
@section('content')


<div class="col-6">
    <div class="card">
        <div class="card-body">
            <x-clarity-building-line :class="($class ?? '') . ' bg-white  p-5'" />
            <a href="departments" class="btn btn-primary">View Departments</a>
        </div>
    </div>
</div>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <x-clarity-employee-group-line :class="($class ?? '') . ' bg-white  p-5'" />
            <a href="employees" class="btn btn-primary">View Employees</a>
        </div>
    </div>
</div>


@endsection