<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QccDepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('qcc_departments')->insert([
            ['id' => 1, 'name' => 'PRODUCTION SUPPORT-AUTO', 'dept_code' => '396'],
            ['id' => 2, 'name' => 'PLANT ENGINEERING - SPM', 'dept_code' => '304'],
            ['id' => 3, 'name' => 'PRODUCTION SUPPORT - COMMON', 'dept_code' => '028'],
            ['id' => 4, 'name' => 'PRODUCTION ENGG', 'dept_code' => '138'],
            ['id' => 5, 'name' => 'ENG-MAINTENANCE', 'dept_code' => '833'],
            ['id' => 6, 'name' => 'MES & KAIZEN', 'dept_code' => '134'],
            ['id' => 7, 'name' => 'PRODUCTION - DC', 'dept_code' => '501'],
            ['id' => 8, 'name' => 'TOOL MGMT & ENGG', 'dept_code' => '145'],
            ['id' => 9, 'name' => 'UTILITY DEPARTMENT', 'dept_code' => '097'],
            ['id' => 10, 'name' => 'PC & LOGISTICS', 'dept_code' => '136'],
            ['id' => 11, 'name' => 'PLANT ENGINEERING - DC', 'dept_code' => '504'],
            ['id' => 12, 'name' => 'ENG-PC - LOGISTICS', 'dept_code' => '875'],
            ['id' => 13, 'name' => 'TNGA LOGISTICS', 'dept_code' => '148'],
            ['id' => 14, 'name' => 'QUALITY', 'dept_code' => '141'],
            ['id' => 15, 'name' => 'ADMINISTRATION', 'dept_code' => '012'],
            ['id' => 16, 'name' => 'H R M', 'dept_code' => '021'],
            ['id' => 17, 'name' => 'TNGA - CRANK', 'dept_code' => '706'],
            ['id' => 18, 'name' => 'INFORMATION SYSTEMS', 'dept_code' => '099'],
            ['id' => 19, 'name' => 'QE & QA', 'dept_code' => '143'],
            ['id' => 20, 'name' => 'PE-DEVELOPMENT & ENVIRONMENT', 'dept_code' => '139'],
            ['id' => 21, 'name' => 'MAINTENANCE', 'dept_code' => '133'],
            ['id' => 22, 'name' => 'TNGA - HEAD', 'dept_code' => '705'],
            ['id' => 23, 'name' => 'FINANCE & ACCOUNTS', 'dept_code' => '010'],
            ['id' => 24, 'name' => 'QUALITY ASSURANCE- DC', 'dept_code' => '505'],
            ['id' => 25, 'name' => 'INTERNAL LOGISTICS - SPM', 'dept_code' => '310'],
            ['id' => 26, 'name' => 'BUSINESS PLANNING AND SALES', 'dept_code' => '022'],
            ['id' => 27, 'name' => 'ENG-PROD - MACHINING', 'dept_code' => '816'],
            ['id' => 28, 'name' => 'PC - GPS', 'dept_code' => '137'],
            ['id' => 29, 'name' => 'QUALITY ASSURANCE- SPM', 'dept_code' => '305'],
            ['id' => 30, 'name' => 'GD - LINE SUPPLY', 'dept_code' => '898'],
            ['id' => 31, 'name' => 'DIE MAINTENANCE', 'dept_code' => '502'],
            ['id' => 32, 'name' => 'MACHINING MAINTENANCE - TNGA', 'dept_code' => '146'],
            ['id' => 33, 'name' => 'TNGA - BLOCK', 'dept_code' => '704'],
            ['id' => 34, 'name' => 'PRODUCTION - SPM', 'dept_code' => '301'],
            ['id' => 35, 'name' => 'QC', 'dept_code' => '142'],
            ['id' => 36, 'name' => 'TNGA - LINE SUPPLY', 'dept_code' => '711'],
            ['id' => 37, 'name' => 'PC - PLANNING', 'dept_code' => '025'],
            ['id' => 38, 'name' => 'ENG-PROD - CRANK LINE', 'dept_code' => '819'],
            ['id' => 39, 'name' => 'SFD & GENBA TRAINING', 'dept_code' => '029'],
            ['id' => 40, 'name' => 'TNGA - ASSEMBLY', 'dept_code' => '707'],
            ['id' => 41, 'name' => 'TNGA MACHINING LOGISTICS', 'dept_code' => '149'],
            ['id' => 42, 'name' => 'ENG-PROD - BLOCK LINE', 'dept_code' => '817'],
            ['id' => 43, 'name' => 'ENG-PROD - HEAD LINE', 'dept_code' => '818'],
            ['id' => 44, 'name' => 'TNGA - ASSY 2', 'dept_code' => '709'],
            ['id' => 45, 'name' => 'TNGA - ASSY 1', 'dept_code' => '708'],
            ['id' => 46, 'name' => 'ENG-ASSY MAIN 1', 'dept_code' => '827'],
            ['id' => 47, 'name' => 'SUPPLIER QUALITY ENHANCEMENT', 'dept_code' => '131'],
            ['id' => 48, 'name' => 'HEALTH & SAFETY', 'dept_code' => '017'],
            ['id' => 49, 'name' => 'TNGA - ASSY 3', 'dept_code' => '710'],
            ['id' => 50, 'name' => 'ASSY MAINTENANCE - GD', 'dept_code' => '135'],
            ['id' => 51, 'name' => 'ASSEMBLY MAINTENANCE - TNGA', 'dept_code' => '147'],
            ['id' => 52, 'name' => 'PURCHASE', 'dept_code' => '027'],
            ['id' => 53, 'name' => 'SUPPLY CHAIN MANAGEMENT','dept_code' => '132'],
            ['id' => 54, 'name' => 'PE - M/C & ASSY', 'dept_code' => '140'],
            ['id' => 55, 'name' => 'ENG-ASSY', 'dept_code' => '823'],
            ['id' => 56, 'name' => 'ENG-ASSY MAIN 2', 'dept_code' => '828'],
            ['id' => 57, 'name' => 'TNGA - MACHINING','dept_code' => '703'],
            ['id' => 58, 'name' => 'PC - PPMD','dept_code' => '024'],
            ['id' => 59, 'name' => 'EXTERNAL AFFAIRS AND CSR','dept_code' => '095'],
            ['id' => 60, 'name' => 'PC - PARTS CONTROL','dept_code' => '026'],
            ['id' => 61, 'name' => 'FULL TIME DIRECTORS','dept_code' => '001'],
            ['id' => 62, 'name' => 'TNGA - SPTT','dept_code' => '702']
        ]);
    }
}
