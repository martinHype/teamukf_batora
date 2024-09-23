<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudyProgramRequest;
use App\Http\Requests\UpdateStudyProgramRequest;
use App\Models\StudyProgram;

class StudyProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response() -> json(StudyProgram::select('id','study_program_name')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudyProgramRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StudyProgram $studyProgram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudyProgramRequest $request, StudyProgram $studyProgram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudyProgram $studyProgram)
    {
        //
    }
}
