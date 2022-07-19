<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\semester;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semesters = Semester::all();
        return view('semester.index',compact('semesters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('semester.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $semester_name = $request->get('semester_name');
        $is_active = $request->get('is_active');

        try {
            Semester::create([
                'semester_name' => $semester_name,
                'is_active' => isset($is_active)
            ]);
            return redirect()->route('semester.index');
        }
        catch(\Exception $e) {
            dd($e->getMessage());
            return redirect() -> back();
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
        $semester = Semester::find($id);
        return view ('semester.show',compact('semester'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $semester = Semester::find($id);
        return view ('semester.edit',compact('semester'));
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
        $semester = Semester::find($id);
        
        $semester_name = $request->get('semester_name');
        $is_active = $request->get('is_active');

        $semester['semester_name'] = $semester_name;
        $semester['is_active'] = isset($is_active);

        $semester->update();
        return redirect() -> route('semester.index',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $semester = Semester::find($id);
        $semester -> delete();
        return redirect() -> route('semester.index');
    }
}
