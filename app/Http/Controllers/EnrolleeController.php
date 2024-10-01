<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateEnrolleeDataApplicantRequest;
use App\Http\Requests\UpdateEnrolleeDataParentRequest;
use App\Models\Country;
use App\Models\Program;
use App\Models\Relative;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class EnrolleeController extends Controller
{
    public function index()
    {
        $enrollee = auth()->user();
        return view('enrollee.pages.index', compact('enrollee'));
    }
    public function programs()
    {
        $enrollee = auth()->user();
        $programs = $enrollee->programs;
        return view('enrollee.pages.programs', compact('enrollee', 'programs'));
    }
    public function services()
    {
        $enrollee = auth()->user();
        $services = $enrollee->services()->withPivot('contract_number')->get();

        return view('enrollee.pages.services', compact('enrollee', 'services'));
    }
    public function documents()
    {
        return view('enrollee.pages.documents');
    }
    public function data()
    {
        $enrollee = auth()->user();
        $relatives = $enrollee->relatives;
        if ($relatives->isEmpty()) {
            $relatives = [new Relative()];
        }
        return view('enrollee.pages.data', compact('enrollee', 'relatives'));
    }
    public function dataApplicant()
    {
        $enrollee = auth()->user();
        $countries = Country::orderBy('name_sk')->get();
        $genders = User::getGenders();
        $martialStatuses = User::getMartialStatuses();
        return view('enrollee.pages.data-applicant', compact('enrollee', 'countries', 'genders',
            'martialStatuses'));
    }
    public function updateDataApplicant(UpdateEnrolleeDataApplicantRequest $request)
    {
        $data = $request->validated();
        $enrollee = auth()->user();
        $enrollee->update($data);
        return redirect()->route('enrollee.update.data-applicant');

    }
    public function dataParent()
    {
        $enrollee = auth()->user();
        $relatives = $enrollee->relatives;
        if ($relatives->isEmpty()) {
            $relatives = [new Relative()];
        }
        $countries = Country::orderBy('name_sk')->get();
        $genders = User::getGenders();
        $martialStatuses = User::getMartialStatuses();
        //dd($relatives);
        return view('enrollee.pages.data-parent', compact('enrollee', 'relatives', 'countries', 'genders',
            'martialStatuses'));
    }
    public function updateDataParent(UpdateEnrolleeDataParentRequest $request)
    {
        $data = $request->validated();
        $enrollee = auth()->user();
        if (isset($request['relative_id']) && $request['relative_id']) {
            $relative = Relative::findOrFail(intval($request['relative_id']));
            if ($enrollee->hasRelative($relative)) {
                $relative->update($data);
            }
        } else {
            $enrollee->relatives()->create($data);
        }
        return redirect()->route('enrollee.update.data-parent');
    }

}
