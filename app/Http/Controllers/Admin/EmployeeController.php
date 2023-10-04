<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Departmant;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employeeAdd()
    {
        return view('admin.employee.employeeAdd', [
            'companies' => Company::all(),
            'departments' => Departmant::all(),
        ]);
    }

    public function employeeCreate(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'company_id' => 'required|exists:companies,id',
            'department_id' => 'required|exists:departmants,id',
            'designation' => 'required|string|max:255',
            'phone' => [
                'required',
                'string',
                'max:255',
                'regex:/(?:\+88|01)?\d{11}/', // Remove the delimiters (^ and $), escape parentheses
            ],
            'password' => 'required|string|min:8',
        ]);

        $newEmployee = Employee::createEmployeeByAdmin($request);
        return redirect('/employee-list')->with('message', "New employee  created Successfully");
    }

    public function engineerList()
    {
        return view('admin.engineer.engineerList', [
            'engineers' => User::orderBy('id', 'desc')->get(),
        ]);
    }
    public function ChangeStatus($id)
    {
        User::changeUserTypeEngineer($id);
        return redirect('/engineer-list')->with('message', " '$id' user Status changed");
    }

    public function employeeList()
    {
        return view('admin.employee.employeeList', [
            'employees' => Employee::orderBy('id', 'desc')->get(),
        ]);
    }

    public function makeChangeStatus($id)
    {
        Employee::makeEmployeeActive($id);
        return redirect('/employee-list')->with('message', "'$id' user Status changed");
    }
}
