<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('id')->paginate(14);
        return view('allemployees/allEmployees')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('allemployees/createEmployee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|between:1000,9999',
            'department' => 'required',
            'full_name' => 'required',
            'email' => 'required'
        ]);
        $employee = new Employee;
        $employee->id = $request->input('id');
        $employee->department = $request->input('department');
        $employee->full_name = $request->input('full_name');
        $employee->email = $request->input('email');
        $employee->user_id = auth()->user()->id;
        $employee->save();
        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('allemployees/editEmployees')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|integer|between:1000,9999',
            'department' => 'required',
            'full_name' => 'required',
            'email' => 'required'
        ]);
        $employee = Employee::find($id);
        $employee->id = $request->input('id');
        $employee->department = $request->input('department');
        $employee->full_name = $request->input('full_name');
        $employee->email = $request->input('email');
        $employee->save();
        return redirect('/employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('/employees');
    }
}
