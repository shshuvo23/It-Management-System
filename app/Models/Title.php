<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;
    private static $title;

    public static function createTitle($request)
    {
        $validatedData = $request->validate([
            'problem_title' => 'required|unique:titles,problem_title',
        ]);

        self::$title = new Title();
        self::$title->problem_title = $request->problem_title;
        self::$title->save();
    }
}
