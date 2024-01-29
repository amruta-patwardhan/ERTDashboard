<?php

namespace App\Http\Controllers;

use App\Models\Qcc_Departments;
use App\Models\Zonemaster;
use Illuminate\Http\Request;

class ZonemasterController extends Controller
{
    public function index(){
        // $employees = Employees::all();
         return view('ertdash.zonemaster.index');
    }
    
    // public function create(){
    //     return view('ertdash.zonemaster.create'); // 假设有一个名为zone-master的视图文件夹，其中包含一个名为index的视图文件
    // }
    
    public function edit(){
        return view('ertdash.zonemaster.edit'); // 假设有一个名为zone-master的视图文件夹，其中包含一个名为index的视图文件
    }
    
    public function show(){
        return view('ertdash.zonemaster.show'); // 假设有一个名为zone-master的视图文件夹，其中包含一个名为index的视图文件
    }
    
    public function create()
        {
            $department = Qcc_Departments::all();
            return view('ertdash.zonemaster.create')->with('department', $department);
        }
        public function store(Request $request)
        {
            // dd($request->all());
            // Extract 'dept_id' values from the nested array
            $deptIds = array_column($request->dept_ids, 'dept_id');
            Zonemaster::create([
                'name' => $request->zone_name, // Update to 'zone_name'
                'details' => $request->zone_details,
                'department_ids' => implode(',', $deptIds)
            ]);
            return response()->json(['success' => 'Zone created successfully']);
        }

    public function destroy($id)
    {
        $zonemaster = Zonemaster::find($id);
        if (!$zonemaster) {
            return response()->json(['success' => false, 'message' => 'ZoneMaster not found'], 404);
        }
        $zonemaster->delete();
        return response()->json(['success' => true, 'message' => 'ZoneMaster deleted successfully']);
    }
}
