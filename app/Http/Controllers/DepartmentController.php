<?php

namespace App\Http\Controllers;

use App\Models\Departmant;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('admin.department.departmentAdd');
    }

    public function create(Request $request)
    {
        Departmant::createDepartment($request);
        return redirect('/department-add')->with('message', 'Created New Department');
    }

    public function list()
    {
        return view('admin.department.departmentList',[
            'departments' => Departmant::orderBy('id' , 'desc')->get(),
        ]);
    }
}
