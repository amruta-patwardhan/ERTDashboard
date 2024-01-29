<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialization;

class SpecializationController extends Controller
{
    // public function index(){
    //     return view('ertdash.specialization.index'); // 假设有一个名为zone-master的视图文件夹，其中包含一个名为index的视图文件
    // }

    // public function create(){
    //     return view('ertdash.specialization.create'); // 假设有一个名为zone-master的视图文件夹，其中包含一个名为index的视图文件
    // }

    // public function edit(){
    //     return view('ertdash.specialization.edit'); // 假设有一个名为zone-master的视图文件夹，其中包含一个名为index的视图文件
    // }

     public function show(){
         return view('ertdash.specialization.show'); // 假设有一个名为zone-master的视图文件夹，其中包含一个名为index的视图文件
     }

    public function index()
    {
        $specialization = Specialization::latest()->paginate(10);
        return view('ertdash.specialization.index',compact('specialization'))
        ->with('i',(request()->input('page',1) -1) *5);
    }
    public function create()
    {
        return view('ertdash.specialization.create');
    }
    public function store(Request $request)
{
    $request->validate([
        'specialization' => 'required',
        'details' => 'required',
    ]);

    // Check if specialization with the same name already exists
    $existingSpecialization = Specialization::where('specialization', $request->specialization);

    if ($existingSpecialization) {
        return redirect()->route('ertdash.specialization.create')->with('error', 'Specialization with this name already exists');
    }

    // If no existing specialization with the same name, create a new one
    Specialization::create([
        'specialization' => $request->specialization,
        'details' => $request->details,
    ]);

    return redirect()->route('ertdash.specialization.index')->with('success', 'Specialization details saved successfully');
}

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'specialization' => 'required',
    //         'details' => 'required',
    //     ]);
    //     // Check if specialization with the same name already exists
    //     $existingSpecialization = Specialization::where('specialization', $request->specialization);

    //     if ($existingSpecialization) {
    //         return redirect()->route('ertdash.specialization.create')->with('error', 'Specialization with this name already exists');
    //     }
    //     // If no existing specialization with the same name, create a new one
    //     Specialization::create([
    //         'specialization' => $request->specialization,
    //         'details' => $request->details,
    //     ]);
    //     return redirect()->route('ertdash.specialization.index')->with('success', 'Specialization details saved successfully');
    // }
    public function edit($id)
{
    // Find the specialization by ID
    $specialization = Specialization::findOrFail($id);

    // Pass the specialization to the edit view
    return view('ertdash.specialization.edit', compact('specialization'));
}

//     public function edit($id)
// {
//         // Find the specialization by ID
//         $specialization = Specialization::findOrFail($id);
//         return redirect()->route('ertdash.specialization.edit', ['id' => $specialization->id]);
//         // return view('ertdash.specialization.edit', compact('specialization'));
   
// }
public function update(Request $request, $id)
{
    try {
        // Find the specialization by ID
        $specialization = Specialization::findOrFail($id);
        // Check if the updated specialization name is the same as the existing one
        if ($request->specialization !== $specialization->specialization) {
            // Check if specialization with the new name already exists
            $existingSpecialization = Specialization::where('specialization', $request->specialization)->first();
            if ($existingSpecialization) {
                return redirect()->route('ertdash.specialization.edit', $id)->with('error', 'Specialization with this name already exists');
            }
        }
        // Update the specialization with the new data from the request
        $specialization->update($request->all());
        if ($request->wantsJson()) {
            // If the request is an API request, return a JSON response
            return response()->json(['message' => 'Specialization updated successfully']);
        } else {
            // If the request is not an API request, redirect with a success message
            return redirect()->route('ertdash.specialization.index')->with('success', 'Specialization updated successfully');
        }
    } catch (\Exception $e) {
        // Handle any exceptions that may occur during the update
        if ($request->wantsJson()) {
            return response()->json(['error' => 'Error updating specialization'], 500);
        } else {
            // If the request is not an API request, redirect with an error message
            return redirect()->route('ertdash.specialization.index')->with('error', 'Error updating specialization');
        }
    }
}
//     } catch (\Exception $e) {
//         // Handle any exceptions that may occur during the update
//         if ($request->wantsJson()) {
//             return response()->json(['error' => 'Error updating specialization'], 500);
//         } else {
//             // If the request is not an API request, redirect with an error message
//             return redirect()->route('specialization.index')->with('error', 'Error updating specialization');
//         }
//     }
// }        skanda Upadhya G is boy .thenee fnvk ddwdn w
    // public function destroy(Specialization $specialization)
    // {
    //     $specialization->delete();
    //     return redirect()->route('specialization.index')
    //      ->with('success','departments deleted successfully');
    // }
    public function destroy(Request $request, $id)
    {
        try {
            // Find the specialization by ID
            $specialization = Specialization::findOrFail($id);
            // Delete the specialization
            $specialization->delete();
            if ($request->wantsJson()) {
                // If the request is an API request, return a JSON response
                return response()->json(['message' => 'Specialization deleted successfully']);
            } else {
                // If the request is not an API request, redirect with a success message
                return redirect()->route('ertdash.specialization.index')->with('success', 'Specialization deleted successfully');
            }
        } catch (\Exception $e) {
            // Handle any exceptions that may occur during the deletion
            if ($request->wantsJson()) {
                return response()->json(['error' => 'Error deleting specialization'], 500);
            } else {
                // If the request is not an API request, redirect with an error message
                return redirect()->route('ertdash.specialization.index')->with('error', 'Error deleting specialization');
            }
        }
    }

}


