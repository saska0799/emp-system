@extends('layout/layout')
@section('content')
<h1>Departments</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($departments as $department)
        <tr>
            <th>{{$department->id}}</th>
            <td>
                {{$department->name}}
            </td>
            <td class="container d-flex flex-row">
                {{Form::open(['action'=>['App\Http\Controllers\DepartmentsController@destroy', $department->id], 'method'=>'POST'])}}
                {{Form::hidden('_method', 'DELETE')}}
                {{ Form::button('<i class="fa-solid fa-trash"></i>', ['class' => 'btn btn-primary', 'type' => 'submit']) }}
                {{Form::close()}}

                <a class='btn btn-primary ms-3' href='/departments/{{$department->id}}/edit'><i class="fa-solid fa-pen-to-square"></i></a>

            </td>

        </tr>
        @endforeach

    </tbody>

</table>
{{$departments->links()}}
@endsection