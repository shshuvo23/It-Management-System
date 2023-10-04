<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    private static $company;

    public static function createCompany($request)
    {
        $validatedData = $request->validate([
            'company_name' => 'required|unique:companies,company_name',
        ]);

        self::$company = new Company();
        self::$company->company_name = $request->company_name;
        self::$company->save();
    }
}
