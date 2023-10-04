<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackAccessories extends Model
{
    use HasFactory;


    public function feedback()
    {
        return $this->belongsTo(Feedback::class);
    }
}
