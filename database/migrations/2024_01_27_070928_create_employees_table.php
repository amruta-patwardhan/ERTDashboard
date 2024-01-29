<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('DEP_DEPTNO');
            $table->string('DEP_DEPTNAME');
            $table->string('emp_no');
            $table->string('emp_name');
            $table->string('emp_grade');
            $table->date('EMP_DOB')->nullable();
            $table->date('emp_doa');
            $table->string('ADD_OFFICE_MOBILENO')->nullable();
            $table->string('ADD_OFFICE_MAILID')->nullable();
            $table->string('EMP_BOSS');
            $table->string('personal_mail')->nullable();
            $table->string('personal_mobile_number')->nullable();
            $table->string('aadhaar_number')->nullable();
            $table->tinyInteger('active')->default(0);
            $table->timestamps();
            $table->softDeletes(); // Adds 'deleted_at' column for soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
