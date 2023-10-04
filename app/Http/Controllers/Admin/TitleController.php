<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function  titleAdd()
    {
        return view('admin.title.titleAdd');
    }

    public function titleCreate(Request $request)
    {
        Title::createTitle($request);
        return redirect('/title-add')->with('message', 'Created New Title');
    }

    public function list()
    {
        return view('admin.title.titleList', [
            'titles' => Title::orderBy('id', 'desc')->get(),
        ]);
    }
}
