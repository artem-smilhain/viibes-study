<?php


namespace App\Http\Controllers\Admin\User;


use App\Http\Requests\Users\StoreSpecialitiesRequest;
use App\Models\Payment;
use App\Models\Program;
use App\Models\ProgramStatus;
use App\Models\Status;
use App\Models\User;
use \App\Http\Controllers\Controller;

class SpecialityController extends Controller
{

    public function index(User $user)
    {
        $programs = $user->programs;
        $programStatuses = Status::all();
        return view('admin.users.specialities.index', compact('user', 'programs', 'programStatuses'));
    }
    public function create(User $user)
    {
        $programStatuses = Status::all();
        return view('admin.users.specialities.create', compact('user', 'programStatuses'));
    }
    public function store(StoreSpecialitiesRequest $request, User $user)
    {
        $data = $request->validated();
        $user->programs()->attach($data['program_id']);
        ProgramStatus::create(['program_id' => $data['program_id'], 'user_id' => $user->id, 'status_id' => $data['program_status_id']]);
        return redirect()->route('admin.users.specialities', $user);
    }
    public function destroy(User $user, Program $program)
    {
        $user->programs()->detach($program->id);
        return redirect()->route('admin.users.specialities', $user);
    }
    public function storeStatus(StoreSpecialitiesRequest $request, User $user, Payment $payment)
    {
        $data = $request->validated();
        ProgramStatus::create(['program_id' => $data['program_id'], 'user_id' => $user->id, 'status_id' => $data['program_status_id']]);
        return redirect()->route('admin.users.specialities', $user);
    }
    public function destroyProgramStatus(User $user, Program $program, Status $status)
    {
        $programStatus = ProgramStatus::where('user_id', $user->id)
            ->where('program_id', $program->id)
            ->where('status_id', $status->id)
            ->firstOrFail();
        $programStatus->delete();
        return redirect()->route('admin.users.specialities', $user);
    }
}
