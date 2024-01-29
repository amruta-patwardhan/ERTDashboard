<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ErtMember;

class ErtmemberController extends Controller
{
    public function index()
    {
     return view('ertdash.ertmember.index');
    // $ertmember = ErtMember::latest()->paginate(5);
    // return view('ert.masters.ert_member.member',compact('ErtMember'))
    // ->with('i',(request()->input('page',1) -1) *5);
     }

    public function create()
    {
        return view('ertdash.ertmember.create');
    }

    
    //   public function selectZone(){
    //     $zone = ['Assembly', 'GD', 'TNGA'];

    //     // Pass the $zone variable to the view
    //     return view('ert.masters.ert_member.create')->with('zone', $zone);
    //   }

     public function edit()
     {
         return view('ertdash.ertmember.edit');
     }

     public function show()
     {
         return view('ertdash.ertmember.show');
     }
     

     public function store(Request $request)
     { 
         // dd($request->all());
         $request->validate([
            'zone' => 'required',
            'zonename' => 'required',
            'department' => 'required',
        ]);
        ErtMember::create([
            'zone' => $request->zone,
            'zonename' => $request->zonename,
            'department' => $request->department,
        ]);
        return redirect()->route('ertdash.ertmember.index')->with('success', 'Zone details saved successfully');
        
      }
    // public function index(){
    //     return view('ertdash.ertmember.index'); // 假设有一个名为zone-master的视图文件夹，其中包含一个名为index的视图文件
    // }

    // public function create(){
    //     return view('ertdash.ertmember.create'); // 假设有一个名为zone-master的视图文件夹，其中包含一个名为index的视图文件
    // }

    // public function edit(){
    //     return view('ertdash.ertmember.edit'); // 假设有一个名为zone-master的视图文件夹，其中包含一个名为index的视图文件
    // }

    // public function show(){
    //     return view('ertdash.ertmember.show'); // 假设有一个名为zone-master的视图文件夹，其中包含一个名为index的视图文件
    // }
    // public function index()
    // {
    //  return view('ertdash.ertmember.index');
    // $ertmember = ErtMember::latest()->paginate(5);
    // return view('ert.masters.ert_member.member',compact('ErtMember'))
    // ->with('i',(request()->input('page',1) -1) *5);
    //  }

    // public function create()
    // {
    //     return view('ertdash.ertmember.create');
    // }

    
    //   public function selectZone(){
    //     $zone = ['Assembly', 'GD', 'TNGA'];

    //     // Pass the $zone variable to the view
    //     return view('ert.masters.ert_member.create')->with('zone', $zone);
    //   }

    //  public function edit()
    //  {
    //      return view('ertdash.ertmember.edit');
    //  }

    //  public function view()
    //  {
    //      return view('ertdash.ertmember.show');
    //  }
     

    //  public function store(Request $request)
    //  { 
    //      // dd($request->all());
    //      $request->validate([
    //         'zone' => 'required',
    //         'zonename' => 'required',
    //         'department' => 'required',
    //     ]);
    //     ErtMember::create([
    //         'zone' => $request->zone,
    //         'zonename' => $request->zonename,
    //         'department' => $request->department,
    //     ]);
    //     return redirect()->route('ertmember.member')->with('success', 'Zone details saved successfully');
        
    //  }

}
