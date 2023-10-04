<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Departmant;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeAuthController extends Controller
{
    public function registerForm()
    {
        return view('employee.auth.registrationForm', [
            'companies' => Company::all(),
            'departments' => Departmant::all(),
        ]);
    }

    public function register(Request $request)
    {
        // dd($request);
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


        Employee::createEmployee($request);
        return redirect('/user-regitrationForm')
            ->with('success', 'Your account has been created successfully. Please contact the admin to activate your account.');
    }

    public function loginForm()
    {
        return view('employee.auth.loginForm');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('employee')->attempt($credentials)) {
            // Retrieve the authenticated employee
            $employee = Auth::guard('employee')->user();

            // Check if the employee's status is 1 (active)
            if ($employee->status == 1) {
                // Status is active, proceed with login
                session(['authenticated_employee' => $employee]); // Store the employee's data in the session
                // dd(session('authenticated_employee'));
                return redirect()->intended('/user-dashboard'); // Redirect to the desired page after successful login
            } else {
                // Status is not active, log the employee out and show an error message
                Auth::guard('employee')->logout();
                return redirect()->back()->with('error', 'Your account is inactive. Please contact the admin.'); // Redirect back with an error message
            }
        } else {
            // Authentication failed
            return redirect()->back()->with('error', 'Invalid credentials or inactive account. Please contact the admin.'); // Redirect back with an error message
        }
    }
}
