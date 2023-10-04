<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('admin.company.companyAdd');
    }

    public function create(Request $request)
    {
        Company::createCompany($request);
        return redirect('/company-add')->with('message', 'New Company name added');
    }

    public function companyList()
    {
        return view('admin.company.companyList',[
            'companies' => Company::orderBy('id', 'desc')->get(),
        ]);
    }
}
