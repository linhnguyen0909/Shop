<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create()
    {
        return view('createEmployee');
    }
    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->employee_name = $request->get('employee_name');
        $employee->amount = $request->get('employee_salary');

        $employee->save();

        return 'Success';

    }
}
