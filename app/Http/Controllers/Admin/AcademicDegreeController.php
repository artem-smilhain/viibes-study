<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreAcademicDegreeRequest;
use App\Http\Requests\UpdateAcademicDegreeRequest;
use App\Models\AcademicDegree;
use App\Http\Controllers\Controller;

class AcademicDegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academic_degrees = AcademicDegree::orderBy('degree_abbreviation')->get();
        return view('admin.academic-degrees.index', compact('academic_degrees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.academic-degrees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAcademicDegreeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAcademicDegreeRequest $request)
    {
        $data = $request->validated();
        $academic_degree = AcademicDegree::create($data);
        return view('admin.academic-degrees.show', $academic_degree);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AcademicDegree  $academic_degree
     * @return \Illuminate\Http\Response
     */
    public function show(AcademicDegree $academic_degree)
    {
        return view('admin.academic-degrees.show', compact('academic_degree'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AcademicDegree  $academic_degree
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademicDegree $academic_degree)
    {
        return view('admin.academic-degrees.edit', compact('academic_degree'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAcademicDegreeRequest  $request
     * @param  \App\Models\AcademicDegree  $academic_degree
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAcademicDegreeRequest $request, AcademicDegree $academic_degree)
    {
        $data = $request->validated();
        $academic_degree->update($data);
        return redirect()->route('admin.academic-degrees.show', $academic_degree);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AcademicDegree  $academic_degree
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademicDegree $academic_degree)
    {
        $academic_degree->delete();
        return redirect()->route('admin.academic-degrees.index');
    }
}
