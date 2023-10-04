<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Employee extends Model implements Authenticatable
{
    use HasFactory;

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
    private static $employee;

    public static function createEmployee($request)
    {
        self::$employee = new Employee();
        self::$employee->name = $request->name;
        self::$employee->email = $request->email;
        self::$employee->company_id = $request->company_id;
        self::$employee->department_id = $request->department_id;
        self::$employee->designation = $request->designation;
        self::$employee->phone = $request->phone;
        self::$employee->password = bcrypt($request->password);
        self::$employee->save();
    }

    public static function createEmployeeByAdmin($request)
    {
        self::$employee = new Employee();
        self::$employee->name = $request->name;
        self::$employee->email = $request->email;
        self::$employee->company_id = $request->company_id;
        self::$employee->department_id = $request->department_id;
        self::$employee->designation = $request->designation;
        self::$employee->phone = $request->phone;
        self::$employee->password = bcrypt($request->password);
        self::$employee->status = 1;
        self::$employee->save();
    }

    public static function changePassword($request, $id)
    {
        self::$employee = Employee::find($id);
        if (self::$employee) {
            // Verify if the entered current password matches the stored hashed password
            if (Hash::check($request->current_password, self::$employee->password)) {
                // Set the new password and save the customer record
                self::$employee->password = bcrypt($request->new_password);
                self::$employee->save();

                return true;
            }
        }

        return false;
    }


    public static function makeEmployeeActive($id)
    {
        self::$employee = Employee::find($id);
        if (self::$employee->status == 0) {
            self::$employee->status = 1;
        } else {
            self::$employee->status = 0;
        }
        self::$employee->save();
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function department()
    {
        return $this->belongsTo(Departmant::class);
    }
}
