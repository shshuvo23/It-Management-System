<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Issue;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IssueController extends Controller
{
    public function addIssue()
    {
        return view('employee.issue.issueAdd', [
            'titles' => Title::all(),
        ]);
    }

    public function createIssue(Request $request)
    {

        Issue::makeReport($request);
        return redirect('/make-report')->with('message', 'Your Report Successfully submited As much as Possible Our Engineeer Solve Your Problem.Thankyou');
    }

    public function issueList()
    {
        $user = Auth::guard('employee')->user();
        $employeeId = $user->id;
        return view('employee.issue.issueList', [
            'issues' => Issue::where('employee_id', $employeeId)->orderBy('id', 'desc')->with('feedback')->get(),
        ]);
    }

    public function apporvedAccessory($id)
    {

        // Retrieve the issue by its ID
        $issue = Issue::find($id);

        // Retrieve feedback records for the given issue
        $feedbacks = $issue->feedback()->get();

        // Initialize an empty array to store accessory data
        $accessoryData = [];

        // Loop through the feedbacks and retrieve accessory data
        foreach ($feedbacks as $feedback) {
            $accessoryData[$feedback->id] = [
                'accessory_names' => $feedback->accessories->pluck('accessory_name')->toArray(),
                'status' => $feedback->status,
            ];
        }
        return view('employee.issue.accessoryList', [
            'issue' => $issue,
            'accessoryData' => $accessoryData,
        ]);
    }

    public function statusComplete($id)
    {
        Issue::statusChangeComplete($id);
        return redirect('/report-list')->with('message' , 'Thankyou for Your FeedBack');
    }

    public function statusApporved($id)
    {
        Feedback::statusChangeAccept($id);
        return redirect('/report-list')->with('message' , 'Thankyou for Your FeedBack');
    }
    public function statusRejected($id)
    {
        Feedback::statusChangeReject($id);
        return redirect('/report-list')->with('message' , 'Thankyou for Your FeedBack');
    }
}
