<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\FeedbackAccessories;
use App\Models\Issue;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('admin.report.viewReport', [
            'reports' => Issue::orderBy('id', 'desc')->get(),
        ]);
    }

    public function completeList()
    {
        return view('admin.report.completeList', [
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

            return view('admin.report.reportDetail', [
                'report' => $issue,
                'accessoryData' => $accessoryData,
            ]);
        } catch (\Exception $e) {
            // Handle the case where the issue with the given ID is not found
            return abort(404);
        }

        // $issue = Issue::find($id);

        // // Retrieve feedback records for the given issue
        // $feedbacks = $issue->feedback()->get();

        // // Initialize an empty array to store accessory data
        // $accessoryData = [];

        // // Loop through the feedbacks and retrieve accessory data
        // foreach ($feedbacks as $feedback) {
        //     $accessoryData[$feedback->id] = [
        //         'accessory_names' => $feedback->accessories->pluck('accessory_name')->toArray(),
        //         'accessory_prices' => $feedback->accessories->pluck('accessory_price')->toArray(),
        //         'status' => $feedback->status,
        //     ];
        // }
        // return view('admin.report.reportDetail', [
        //     'report' => Issue::find($id),
        //     'accessoryData' => $accessoryData,
        // ]);
    }

    public function reportStatus($id)
    {
        Feedback::statusChangePending($id);
        return redirect()->route('complete.report')->with('message', 'Status changes as Approved');
    }
}
