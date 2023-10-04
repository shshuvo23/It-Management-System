<?php

namespace App\Http\Controllers\Engineer;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Issue;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function workingFeedback($id)
    {
        return view('engineer.report.workingfeedback',[
            'issue' => Issue::find($id),
        ]);
    }

    public function submitfeedback(Request $request, $id)
    {
        Feedback::createFeedback($request, $id);
        return redirect('/task-list')->with('message' , 'Your Feedback Submitted');
    }
}
