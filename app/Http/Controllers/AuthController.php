<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function redirect()
    {

        // if (Auth::check()) {
        //     $user = Auth::user();

        //     // Check if the user is an admin or engineer based on userType (assuming userType is in the users table)
        //     if ($user->userType == 0) {
        //         return view('admin.index'); // Admin
        //     } elseif ($user->userType == 1) {
        //         return view('engineer.index'); // Engineer
        //     } else {
        //         // Check if the user exists in the employee table (assuming employee_id is the unique identifier)
        //         $employee = Employee::where('employee_id', $user->id)->first();
        //         dd($employee);

        //         if ($employee) {
        //             return view('website.index'); // Employee
        //         }
        //     }
        // } else {
        //     // Handle the case when there is no authenticated user
        //     return redirect()->route('employee.loginForm'); // Redirect to the login page or another appropriate action
        // }

        // Handle the case where no user is authenticated (guest)
        // You can redirect or display an appropriate view for guests



        $usertype = Auth::user()->usertype;

        if ($usertype == 0) {
            return view('admin.index', [
                'totalEmployees' => Employee::count(),
                'totalIssues' => Issue::count(),
                'totalCompleteIssue' => Issue::where('issue_status', 2)->count(),
                'totalPendingIssue' => Issue::where('issue_status' , 0)->count(),
            ]);
        } elseif (Auth::guard('employee')->check()) {
            return view('employee.index');
        } else {
            return view('engineer.index');
        }
    }
}
