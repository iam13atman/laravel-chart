<?php

namespace App\Http\Controllers;
use App\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function getEmployeeDetails()
    {
        $salary = Salary::pluck('amount','employee_name');
        return response()->json([
            'data' => $salary,
        ]);
    }
}
