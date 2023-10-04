<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index',[
            'pendings' => Issue::where('issue_status' , 0)->orderBy('id', 'desc')->get(),
            'completes' => Issue::where('issue_status', 2)->orderBy('id', 'desc')->get(),
        ]);
    }
}
