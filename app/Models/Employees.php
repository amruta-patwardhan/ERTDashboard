<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'empid';
    protected $fillable = [
        'DEP_DEPTNO',
        'DEP_DEPTNAME',
        'emp_no',
        'emp_name',
        'emp_grade',
        'EMP_DOB',
        'emp_doa',
        'ADD_OFFICE_MOBILENO',
        'ADD_OFFICE_MAILID',
        'EMP_BOSS',
        'personal_mail',
        'personal_mobile_number',
        'aadhaar_number',
        'active']; 

    public function qcc_departments()
    {
        return $this->belongsTo(Qcc_Departments::class, 'DEP_DEPTNAME', 'DEP_DEPTNAME');
    }
}
