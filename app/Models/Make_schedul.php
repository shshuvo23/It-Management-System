<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Make_schedul extends Model
{
    use HasFactory;
    private static $schedule, $issue;

    public static function scheduleAdd($request, $id)
    {
        self::$schedule = new Make_schedul();
        self::$issue = Issue::find($id);
        self::$schedule->issue_id = self::$issue->id;
        self::$schedule->schedule_date = $request->schedule_date;
        self::$schedule->priority = $request->priority;
        self::$schedule->save();
    }

    public static function scheduleEdit($request, $id)
    {
        // Find the schedule to edit
        self::$schedule = Make_schedul::find($id);

        if (self::$schedule) {
            // Update the schedule attributes with new values
            self::$schedule->schedule_date = $request->schedule_date;
            self::$schedule->priority = $request->priority;
            self::$schedule->save();

            return self::$schedule;
        }

        return null; // Handle the case where the schedule is not found
    }

    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }
    public function feedback()
    {
        return $this->hasMany(Feedback::class, 'issue_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
