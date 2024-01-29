<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qcc_Departments extends Model
{
    use HasFactory;

    protected $table = 'Qcc_Departments';
    protected $fillable = ['DEP_DEPTNAME'];

    public function employees()
    {
        return $this->hasMany(Employees::class, 'DEP_DEPTNAME', 'DEP_DEPTNAME');
    }
}
