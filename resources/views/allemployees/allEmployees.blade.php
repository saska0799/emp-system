@extends('layout/layout')
@section('content')
<h1>Employees</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Department</th>
            <th>Full Name</th>
            <th>Contact</th>
            @auth
            <th>Action</th>
            @endauth
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
        <tr>
            <th>{{$employee->id}}</th>
            <td>
                {{$employee->department}}
            </td>
            <td>
                {{$employee->full_name}}
            </td>
            <td>
                {{$employee->email}}
            </td>
            @auth
            <td class="container d-flex flex-row">
                {{Form::open(['action'=>['App\Http\Controllers\EmployeesController@destroy', $employee->id], 'method'=>'POST'])}}
                {{Form::hidden('_method', 'DELETE')}}
                {{ Form::button('<i class="fa-solid fa-trash"></i>', ['class' => 'btn btn-primary', 'type' => 'submit']) }}
                {{Form::close()}}


                <a class='btn btn-primary ms-3' href='/employees/{{$employee->id}}/edit'><i class="fa-solid fa-pen-to-square"></i></a>
            </td>
            @endauth
        </tr>
        @endforeach
    </tbody>
</table>

{{$employees->links()}}
@endsection