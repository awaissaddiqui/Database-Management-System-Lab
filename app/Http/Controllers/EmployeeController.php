<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = DB::select('
        SELECT employees.name AS employee_name, departments.name AS department_name, jobDetail, id
        FROM employees
        INNER JOIN departments ON employees.departmentID = departments.departmentID
    ');
        // $employees = Employee::with('department')->get();
        // return view('index', compact('employees'));
        return view('dashboard', compact('employees'));
    }
}
