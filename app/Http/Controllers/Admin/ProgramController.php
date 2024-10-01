<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use App\Models\AcademicDegree;
use App\Models\City;
use App\Models\Direction;
use App\Models\Faculty;
use App\Models\Group;
use App\Models\Program;
use App\Http\Controllers\Controller;
use App\Models\University;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::orderBy('academic_degree_id', 'ASC')->paginate(100);
        $directions = Direction::orderBy('row_weight', 'ASC')->get();
        return view('admin.programs.index', compact('programs', 'directions'));
    }

    public function indexByDirection(Direction $direction){
        $programs = Program::where('direction_id', $direction->id)->orWhere('direction_2_id', $direction->id)->orderBy('academic_degree_id', 'ASC')->get();
        $directions = Direction::orderBy('row_weight', 'ASC')->get();
        $direction_title = $direction->name;
        $academic_degrees = [];
        $universities = [];
        foreach ($programs as $program){
            if (array_key_exists($program->academicDegree->degree_title, $academic_degrees)){
                array_push($academic_degrees[$program->academicDegree->degree_title], $program);
            }
            else{
                $academic_degrees[$program->academicDegree->degree_title] = [$program];
            }
            if (array_key_exists($program->faculty->university->name, $universities)){
                if (array_key_exists($program->academicDegree->degree_title, $universities[$program->faculty->university->name])){
                    array_push($universities[$program->faculty->university->name][$program->academicDegree->degree_title], $program);
                }
                else{
                    $universities[$program->faculty->university->name][$program->academicDegree->degree_title] = [$program];
                }
            }
            else{
                $universities[$program->faculty->university->name][$program->academicDegree->degree_title] = [$program];
            }
        }
        return view('admin.programs.index-by-direction', compact('academic_degrees', 'directions', 'direction_title', 'universities'));
    }
    public function searchByTerm(Request $request){
        $term = $request['term'];
        $directions = Direction::orderBy('row_weight', 'ASC')->get();
        $programs = Program::where('name', 'LIKE', "%".$term."%")->orWhere('id', $term)->orderBy('academic_degree_id', 'ASC')->get();
        return view('admin.programs.search-by-term', compact('programs', 'term',  'directions'));
    }

    public function searchByDescription(Request $request){
        $term = 'with description';
        $directions = Direction::orderBy('row_weight', 'ASC')->get();
        $programs = Program::where('description','<>','')->orderBy('faculty_id', 'ASC')->get();
        return view('admin.programs.search-by-term', compact('programs', 'term',  'directions'));
    }
    public function autocompleteByName(Request $request){
        $term = $request['term'];
        $programs = Program::select(['name', 'id'])->where('name', 'LIKE', "%".$term."%")->orWhere('id', $term)->orderBy('academic_degree_id', 'ASC')->get();
        return response()->json($programs);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculties = Faculty::orderBy('name_sk')->get();
        $directions = Direction::orderBy('name_sk')->get();
        $academic_degrees = AcademicDegree::orderBy('degree_title')->get();
        return view('admin.programs.create', compact('faculties', 'directions', 'academic_degrees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProgramRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProgramRequest $request)
    {
        $data = $request->validated();
        $program = Program::create($data);
        return redirect()->route('admin.programs.show', $program);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        return view('admin.programs.show', compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        $faculties = Faculty::orderBy('name_sk')->get();
        $directions = Direction::orderBy('name_sk')->get();
        $academic_degrees = AcademicDegree::orderBy('degree_title')->get();
        return view('admin.programs.edit', compact('faculties', 'directions', 'program', 'academic_degrees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProgramRequest  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgramRequest $request, Program $program)
    {
        $data = $request->validated();
        $program->update($data);
        return redirect()->route('admin.programs.show', $program);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('admin.programs.index');
    }
}
