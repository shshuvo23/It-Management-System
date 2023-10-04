<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departmant extends Model
{
    use HasFactory;
    private static $department;

    public static function createDepartment($request)
    {
        $validatedData = $request->validate([
            'department_name' => 'required|unique:departmants,department_name',
        ]);

        self::$department = new Departmant();
        self::$department->department_name = $request->department_name;
        self::$department->save();
    }
}
