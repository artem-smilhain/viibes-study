<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Group;
use App\Models\ProgramsInfos;
use App\Models\University;
use Illuminate\Http\Request;

class ProgramsInfosController extends Controller
{
    //
    public function index(){
        $programs_infos = ProgramsInfos::orderBy('id', 'desc')->get();
        return view('admin.programs-infos.index', compact(['programs_infos']));
    }

    public function indexByUniversity(){
        $programs = ProgramsInfos::all();
        $programs_infos = [];
        foreach ($programs as $program){
            if (!array_key_exists($program->university, $programs_infos)){
                $programs_infos[$program->university] = [$program];
            }
            else{
                array_push($programs_infos[$program->university], $program);
            }
        }
        return view('admin.programs-infos.index-by-university', compact(['programs_infos']));
    }

    public function create()
    {
        $universities = University::orderBy('row_weight')->get();
        return view('admin.programs-infos.create', compact('universities'));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required|string',
            'program' => '',
            'program_sk' => '',
            'years_of_study' => '',
            'university' => '',
            'description' => '',
            'exams' => '',
            'study_plan_link' => '',
            'study_plan_file' => '',
        ]);
        if ($request->hasFile('study_plan_file')) {
            $data['study_plan_file'] = $request->file('study_plan_file')->store('programs-infos/files', 'public');
        }
        ProgramsInfos::create($data);
        return redirect()->route('admin.program-info.index');
    }
    public function destroy(ProgramsInfos $program_info) {
        $program_info->delete();
        return redirect()->route('admin.program-info.index');
    }

    public function edit(ProgramsInfos $program_info) {
        $universities = University::orderBy('row_weight')->get();
        return view('admin.programs-infos.edit', compact('universities', 'program_info'));
    }
    public function update(Request $request, ProgramsInfos $program_info) {
        $data = $this->validate($request, [
            'name' => 'required|string',
            'program' => '',
            'program_sk' => '',
            'years_of_study' => '',
            'university' => '',
            'description' => '',
            'exams' => '',
            'study_plan_link' => '',
            'study_plan_file' => '',
        ]);
        if ($request->has('study_plan_file')) {
            if ($program_info->study_plan_file){
                \Storage::disk('public')->delete($program_info->study_plan_file);
            }
            $data['study_plan_file'] = $request->file('study_plan_file')->store('programs-infos/files', 'public');
        }
        $program_info->update($data);
        $programs_infos = ProgramsInfos::all();
        return redirect()->route('admin.program-info.index', compact('programs_infos'));
    }
}
