<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Issue extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        // Other fillable columns,
        'issue_status', // Add 'issue_status' to allow mass assignment
    ];
    private static $issue, $employee;

    public static function makeReport($request)
    {
        self::$issue = new Issue();
        self::$employee = Auth::guard('employee')->user();
        self::$issue->employee_id = self::$employee->id;
        self::$issue->title_id = $request->title_id;
        self::$issue->description = $request->description;
        // Generate and set the issue_code
        $lastIssue = self::orderBy('id', 'desc')->first(); // Get the last issue
        if ($lastIssue) {
            $lastIssueCode = intval($lastIssue->issue_code);
            self::$issue->issue_code = str_pad($lastIssueCode + 1, 6, '0', STR_PAD_LEFT);
        } else {
            // If there are no existing issues, start with '000001'
            self::$issue->issue_code = '000001';
        }

        self::$issue->save();
    }

    public static function statusChangeWorking($id)
    {
        self::$issue = Issue::find($id);
        if (self::$issue->issue_status == 0) {
            self::$issue->issue_status = 1;
        } else {
            self::$issue->issue_status = 0;
        }
        self::$issue->save();
    }

    public static function statusChangeComplete($id)
    {
        self::$issue = Issue::find($id);
        if (self::$issue->issue_status == 1) {
            self::$issue->issue_status = 2;
        } else {
            self::$issue->issue_status = 1;
        }
        self::$issue->save();
    }


    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function title()
    {
        return $this->belongsTo(Title::class);
    }
    public function makeSchedules()
    {
        return $this->hasMany(Make_schedul::class);
    }
    public function feedback()
    {
        return $this->hasMany(Feedback::class, 'issue_id');
    }
}
