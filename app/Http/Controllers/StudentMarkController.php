<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentMarkRequest;
use App\Models\Student;
use App\Models\StudentMark;
use Illuminate\Http\Request;

class StudentMarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentMarks = StudentMark::with('student')->latest('id')->get();

        // dd($studentMarks);

        return view('studentMark.index', compact('studentMarks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::pluck('name', 'id');

        return view('studentMark.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentMarkRequest $request)
    {
        StudentMark::create($request->all());

        return redirect()->route('studentMark.index')->with('message', 'Great! You have Successfully added Student Mark');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentMark  $studentMark
     * @return \Illuminate\Http\Response
     */
    public function show(StudentMark $studentMark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentMark  $studentMark
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studentMark = StudentMark::findOrFail($id);

        $students = Student::pluck('name', 'id');
        return view('studentMark.edit', compact('students','studentMark'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentMark  $studentMark
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStudentMarkRequest $request, $id)
    {
        StudentMark::whereId($id)->update($request->except(['_token', '_method']));

        return redirect()->route('studentMark.index')->with('message', 'Great! You have Successfully Updated Student Mark');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentMark  $studentMark
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StudentMark::findOrFail($id)->delete();

        return redirect()->route('studentMark.index')->with('message', 'Great! You have Successfully Deleted Student Mark');
    }
}
