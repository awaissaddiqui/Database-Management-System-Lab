<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'jobDetail', 'departmentID']; 

    public function department()
    {
        return $this->belongsTo(Department::class, 'departmentID'); 
    }
}
