<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollegeInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $college_infos = CollegeInfo::all();
        return view('collegeinfo.index',compact('college_infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $student = Student::find($id);
        $faculties = Factory::select('id', 'faculty_name')->get();
        $batches = Batch::select('id','batch_name','batch_year')->get();
        $semesters = Semester::select('id','semester_name')->get();
        return view ('collegeinfo.create',compact('id','student','faculties','batches','semesters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $TU_registration=$request->get('TU_registration');
        $symbol_no=$request->get('symbol_no'); 
        try{
            CollegeInfo::create([
                'TU_registration'=>$TU_registration,
                'symbol_no'=>$symbol_no
                
            ]);
    
            return redirect()->route('collegeinfos.index');
        }
    
    catch(\Exception $e){
        dd($e->getMessage());
        return redirect()->back();
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
