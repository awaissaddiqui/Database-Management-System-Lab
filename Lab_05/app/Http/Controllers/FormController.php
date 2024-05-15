<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use Validator;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_name' => 'required|string|max:255',
            'department_name' => 'required|string|max:255',
            // 'departmentID' => 'required|exists:departments,departmentID', 
            'job_title' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->with('error', 'Please correct the errors below.');
        }
       

        // Find or create the department
        $department = Department::firstOrCreate(['name' => $request->input('department_name')]);
        $departmentIDs = random_int(1, 100);
         echo "<script>console.log($departmentIDs);</script>";

        // Create a new Employee instance
        $employee = new Employee();
        $employee->name = $request->input('employee_name');
        $employee->departmentID = $departmentIDs;
        $employee->jobDetail = $request->input('job_title');

        // Associate the employee with the department
        $employee->department()->associate($department);
        // Save the employee to the database
        $employee->save();
        

        // Echo the JSON data
        echo "<script>console.log($employee);</script>";
        
        
        

        return redirect()->route('dashboard')->with('success', 'Employee added successfully.');
    }
}
