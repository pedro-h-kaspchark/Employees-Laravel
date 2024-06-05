<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create(){
        return view('employees.create');
    }

    public function store(Request $request){
        Employee::create($request->all());
        return redirect()->route('employees.index');
    }

    public function edit($id) {
        $employee = Employee::find($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id) {
        $employee = Employee::find($id);
        $employee->update($request->all());
        return redirect()->route('employees.index');
    }

    public function destroy($id) {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
