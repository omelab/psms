<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $teacherQuery = Teacher::where('status', 'Active');  
        $rows = $teacherQuery->paginate(10);  
        return view('modules.teacher.list', compact('rows')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id=null)
    {
        $this->validate($request, [
            'teachers_code' => 'required|unique:teachers,teachers_code', 
            'name' => 'required',
            'designation' => 'required',
            'gender' => 'required',
            'marital_status' => 'required',
            'date_of_birth' => 'required',
            'education' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
        ]);

        if($request->hasFile('picture')) {
            $this->validate($request, [
                'picture' => 'required|image|mimes:jpeg,png,jpg|max:1024', 
            ]);
        } 

        if($id){
            $teacher = Teacher::findOrFail($id);
        }else{
            $teacher = new Teacher;
        } 

        if($request->hasFile('picture')) {
            $file = $request->file('picture');  
            $fileName = time().'_'.$file->getClientOriginalName();
            $filePath = $request->file('picture')->storeAs('uploads', $fileName, 'public'); 
            $teacher->picture = $filePath;  
        }
        
        $teacher->teachers_code = $request->teachers_code;
        $teacher->name = $request->name??null;
        $teacher->designation = $request->designation??null;
        $teacher->prmanent_address = $request->prmanent_address??null;
        $teacher->present_address = $request->present_address??null;
        $teacher->district = $request->district??null;
        $teacher->gender = $request->gender??null;
        $teacher->marital_status = $request->marital_status??null;
        $teacher->date_of_birth = isset($request->date_of_birth)?date('Y-m-d', strtotime($request->date_of_birth)):null;
        $teacher->joining_date = isset($request->joining_date)?date('Y-m-d', strtotime($request->joining_date)):null;
        $teacher->education = $request->education??null;
        $teacher->department = $request->department??null;
        $teacher->mobile = $request->mobile??null;
        $teacher->email = $request->email??null;
        $teacher->notes = $request->notes??null;
        $teacher->save();

        if($teacher->id){
            return redirect()->route('teachers.index', $teacher->id)->with('success', 'Teachers Information store successfully.');
        }

        return redirect()->back()->with('error', 'Something went wrong'); 
    }


    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('modules.teacher.single', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('modules.teacher.create', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $this->validate($request, [
            'teachers_code' => 'required|unique:teachers,teachers_code,' . $teacher->id . ',id',
            'name' => 'required',
            'designation' => 'required',
            'gender' => 'required',
            'marital_status' => 'required',
            'date_of_birth' => 'required',
            'education' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
        ]);

        if($request->hasFile('picture')) {
            $this->validate($request, [
                'picture' => 'required|image|mimes:jpeg,png,jpg|max:1024', 
            ]);
        } 
  
        if($request->hasFile('picture')) {
            $file = $request->file('picture');  
            $fileName = time().'_'.$file->getClientOriginalName();
            $filePath = $request->file('picture')->storeAs('uploads', $fileName, 'public'); 
            $teacher->picture = $filePath;  
        }
 
        $teacher->teachers_code = $request->teachers_code;
        $teacher->name = $request->name??null;
        $teacher->designation = $request->designation??null;
        $teacher->prmanent_address = $request->prmanent_address??null;
        $teacher->present_address = $request->present_address??null;
        $teacher->district = $request->district??null;
        $teacher->gender = $request->gender??null;
        $teacher->marital_status = $request->marital_status??null;
        $teacher->date_of_birth = isset($request->date_of_birth)?date('Y-m-d', strtotime($request->date_of_birth)):null;
        $teacher->joining_date = isset($request->joining_date)?date('Y-m-d', strtotime($request->joining_date)):null;
        $teacher->education = $request->education??null;
        $teacher->department = $request->department??null;
        $teacher->mobile = $request->mobile??null;
        $teacher->email = $request->email??null;
        $teacher->notes = $request->notes??null;
        $teacher->save();

        if($teacher->id){
            return redirect()->route('teachers.index', $teacher->id)->with('success', 'Teachers Information updated successfully.');
        }

        return redirect()->back()->with('error', 'Something went wrong'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->status = 'Deleted';

        if($teacher->save()) {
            return redirect()->route('teachers.index', $teacher->id)->with('success', 'Teachers  deleted successfully.');
        }

        return redirect()->back()->with('error', 'Something went wrong'); 
    }
}
