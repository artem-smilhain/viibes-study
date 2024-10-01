<?php

namespace App\Http\Controllers\Map;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Direction;
use App\Models\Faculty;
use App\Models\Group;
use App\Models\ProgramsInfos;
use App\Models\University;

class SiteMapController extends Controller
{
    public function index(){
        $directions = Direction::all();
        $universities = University::all();
        $cities = City::all();
        $groups = Group::all();
        $program_infos = ProgramsInfos::all();
        $academic_degrees = [];
        foreach ($universities as $university) {
            foreach ($university->faculties as $faculty) {
                foreach ($faculty->programs as $program) {
                    if(!isset($academic_degrees[$university->id][$faculty->id][$program->academic_degree_id])) {
                        $academic_degrees[$university->id][$faculty->id][$program->academic_degree_id]['academic_degree'] = $program->academicDegree;
                    }
                    $academic_degrees[$university->id][$faculty->id][$program->academic_degree_id]['programs'][] = $program;
                }
            }
        }
        return response()
            ->view('maps.sitemap', compact(['directions', 'universities', 'cities', 'academic_degrees', 'groups', 'program_infos']))
            ->header('Content-Type', 'text/xml');
    }
}
