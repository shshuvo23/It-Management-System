<?php

namespace App\Http\Controllers\Engineer;

use App\Http\Controllers\Controller;
use App\Models\Issue;
use App\Models\Make_schedul;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportList()
    {
        return view('engineer.report.pendingList', [
            'pendings' => Issue::where('issue_status', 0)
                ->orderBy('id', 'desc')
                ->get(),
        ]);
    }

    public function taskList()
    {
        return view('engineer.report.taskList', [
            'schedules' => Make_schedul::whereHas('issue', function ($query) {
                $query->whereIn('issue_status', [0, 1]);
            })
                ->orderBy('schedule_date', 'asc')
                ->orderBy('priority', 'desc')
                ->with('feedback') // Load feedbacks
                ->get(),
        ]);
    }

    public function completeList()
    {
        return view('engineer.report.completeList', [
            'reports' => Issue::where('issue_status',  2)
                ->orderBy('id', 'desc')
                ->with('feedback') // Load feedbacks
                ->get(),
        ]);
    }

    public function reportDetail($id)
    {

        try {
            // Find the issue by ID or throw a 404 error if not found
            $issue = Issue::findOrFail($id);

            // Retrieve feedback records for the given issue
            $feedbacks = $issue->feedback;

            // Initialize an empty array to store accessory data
            $accessoryData = [];

            // Loop through the feedbacks and retrieve accessory data
            foreach ($feedbacks as $feedback) {
                $accessoryData[$feedback->id] = [
                    'accessory_names' => $feedback->accessories->pluck('accessory_name')->toArray(),
                    'accessory_prices' => $feedback->accessories->pluck('accessory_price')->toArray(),
                    'status' => $feedback->status,
                ];
            }

            return view('engineer.report.accessoryDetail', [
                'report' => $issue,
                'accessoryData' => $accessoryData,
            ]);
        } catch (\Exception $e) {
            // Handle the case where the issue with the given ID is not found
            return abort(404);
        }
    }


    public function statusChange($id)
    {
        Issue::statusChangeWorking($id);
        return redirect('/pending-task')->with('message', 'Status Change As Working');
    }
}
