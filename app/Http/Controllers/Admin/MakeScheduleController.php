<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Issue;
use App\Models\Make_schedul;
use Illuminate\Http\Request;

class MakeScheduleController extends Controller
{
    public function index($id)
    {
        return view('admin.schedule.schedulAdd', [
            'issue' => Issue::find($id),
        ]);
    }

    public function createSchedule(Request $request, $id)
    {
        Make_schedul::scheduleAdd($request, $id);
        return redirect('/make-schedule/' . $id)->with('message', 'Schedule set successfully');
    }

    public function scheduleList()
    {
        return view('admin.schedule.scheduleList', [
            'schedules' => Make_schedul::whereHas('issue', function ($query) {
                $query->whereIn('issue_status', [0, 1]);
            })
                ->orderBy('schedule_date', 'asc')
                ->orderBy('priority', 'desc')
                ->get(),
        ]);
    }

    public function editSchedule($id)
    {
        $schedule = Make_schedul::where('issue_id', $id)->first();
        // Assuming Make_schedul model has a relationship to Issue mode
        return view('admin.schedule.schedulEdit', [
            'schedule' => $schedule,
        ]);
    }

    public function updateSchedule(Request $request, $scheduleId)
    {
        $updatedSchedule = Make_schedul::scheduleEdit($request, $scheduleId);

        if ($updatedSchedule) {
            return redirect('/make-schedule/' . $updatedSchedule->issue_id)
                ->with('message', 'Schedule updated successfully');
        } else {
            return redirect('/make-schedule')
                ->with('error', 'Schedule not found');
        }
    }
}
