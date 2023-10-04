<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Feedback extends Model
{
    use HasFactory;

    private static $feedback, $feedbackAccessory, $issue, $engineer, $accessoryNames, $accessoryPrices;

    public static function createFeedback($request, $id)
    {
        self::$feedback = new Feedback();
        self::$issue = Issue::find($id);
        if (self::$issue) {
            self::$issue->update([
                'issue_status' => 2, // Update this value to 2
            ]);
        }
        self::$feedback->issue_id = self::$issue->id;
        self::$engineer = Auth::user();
        self::$feedback->user_id = self::$engineer->id;
        self::$feedback->save();

        self::$accessoryNames = $request->accessory_name;
        self::$accessoryPrices = $request->accessory_price;

        // Insert each accessory individually
        foreach (self::$accessoryNames as $index => $accessoryName) {
            $accessoryPrice = floatval(self::$accessoryPrices[$index]);

            self::$feedbackAccessory = new FeedbackAccessories();
            self::$feedbackAccessory->feedback_id = self::$feedback->id;

            self::$feedbackAccessory->accessory_name = $accessoryName;
            self::$feedbackAccessory->accessory_price = $accessoryPrice;
            self::$feedbackAccessory->save();
        }

        // self::$feedbackAccessory = new FeedbackAccessories();
        // self::$feedbackAccessory->feedback_id = self::$feedback->id;

        // self::$feedbackAccessory->accessory_name = json_encode($request->accessory_name);
        // self::$feedbackAccessory->accessory_price = json_encode($request->accessory_price);
        // self::$feedbackAccessory->save();
    }

    public static function statusChangePending($id)
    {
        self::$feedback = Feedback::find($id);
        if (self::$feedback->status === 'Rejected') {
            self::$feedback->status = 'Approved';
        } else {
            self::$feedback->status = 'Approved';
        }
        self::$feedback->save();
    }

    public static function statusChangeAccept($id)
    {
        self::$feedback = Feedback::find($id);
        if (self::$feedback->status === 'Pending') {
            self::$feedback->status = 'Approved';
            $issue = Issue::find(self::$feedback->issue_id);
            if ($issue) {
                $issue->update([
                    'issue_status' => 2, // Update this value to 2
                ]);
            }
        } else {
            self::$feedback->status = 'Pending';
        }
        self::$feedback->save();
    }

    public static function statusChangeReject($id)
    {
        self::$feedback = Feedback::find($id);
        if (self::$feedback->status == 'Pending') {
            self::$feedback->status = 'Rejected';
            $issue = Issue::find(self::$feedback->issue_id);
            if ($issue) {
                $issue->update([
                    'issue_status' => 2, // Update this value to 2
                ]);
            }
        } else {
            self::$feedback->status = 'Pending';
        }
        self::$feedback->save();
    }

    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }

    public function accessories()
    {
        return $this->hasMany(FeedbackAccessories::class);
    }
}
