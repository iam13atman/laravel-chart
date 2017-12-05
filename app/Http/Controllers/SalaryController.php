<?php

namespace App\Http\Controllers;
use App\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function getEmployeeDetails()
    {
        $salary = Salary::pluck('amount','employee_name');

        $data = [];
        $label = [];

        foreach ($salary as $name => $amount) {
            array_push($data, $amount);
            array_push($label, $name);
        }

        return response()->json([
            'data' =>[
                'data'=> array_values($data),
                'label'=> array_values($label)
            ]
        ]);
    }
}
