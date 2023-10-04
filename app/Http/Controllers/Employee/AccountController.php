<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function viewAccount()
    {
        $employee = Auth::guard('employee')->user();
        return view('employee.account.viewAccount', [
            'employee' => $employee,
        ]);
    }

    public function changePasswordForm()
    {
        $employee = Auth::guard('employee')->user();
        return view('employee.account.passwordChange',[
            'employee' => $employee,
        ]);
    }

    public function passwordChange(Request $request, $id)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        try {
            Employee::changePassword($request, $id);
            return redirect()->route('account.view')->with('message', 'Password changed successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors([$e->getMessage()]);
        }
    }
}
