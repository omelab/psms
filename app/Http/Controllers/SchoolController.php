<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['schools'] = School::all();
        return view('modules.school.list',  $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $id=null)
    {
        $data =[];

        if($id){
            $data['school'] = School::find($id);
        }

        return view('modules.school.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id=null)
    {  
        $this->validate($request, [
            'school_code' => 'required',
            'school_name' => 'required',
            'regi_number' => 'required',  
            'address' => 'required',  
            'emis_no' => 'required',  
            'establishment' => 'required',  
        ]);

        if($id){
            $school = School::findOrFail($id);
        }else{
            $school = new School;
        } 
        
        $school->school_code =  $request->school_code;
        $school->school_name = $request->school_name??null;
        $school->regi_number =  $request->regi_number??null;
        $school->address =  $request->address??null; 
        $school->emis_no =  $request->emis_no??null; 
        $school->establishment =  $request->establishment??null; 
        $school->save();

        if($school->id){
            return redirect()->route('schools.create', $school->id)->with('success', 'School Information updated successfully.');
        }

        return redirect()->back()->with('errors', 'Something went wrong');
    }

    /**
     * Display the specified resource.
     */
    public function show(School $school)
    {  
        return view('modules.school.single', compact('school'));
    }
 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school)
    {
        //
    }
}
