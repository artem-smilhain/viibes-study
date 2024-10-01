<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreFacultyRequest;
use App\Http\Requests\UpdateFacultyRequest;
use App\Models\Faculty;
use App\Http\Controllers\Controller;
use App\Models\University;
use App\services\FacultyService;


class FacultyController extends Controller
{
    public $service;

    public function __construct(FacultyService $facultyService)
    {
        $this->service = $facultyService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::orderBy('university_id', 'ASC')->get();
        return view('admin.faculties.index', compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $universities = University::orderBy('name_sk')->get();
        return view('admin.faculties.create', compact('universities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFacultyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacultyRequest $request)
    {
        $data = $request->validated();
        $faculty = Faculty::create($data);
        return redirect()->route('admin.faculties.show', $faculty);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        return view('admin.faculties.show', compact('faculty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculty)
    {
        $universities = University::orderBy('name_sk')->get();
        return view('admin.faculties.edit', compact('faculty', 'universities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFacultyRequest  $request
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFacultyRequest $request, Faculty $faculty)
    {
        $data = $request->validated();
        $faculty->update($data);
        return redirect()->route('admin.faculties.show', $faculty);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {
        $faculty->delete();
        return redirect()->route('admin.faculties.index');
    }
}
