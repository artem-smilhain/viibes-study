<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Country;
use App\Models\Payment;
use App\Models\ProgramStatus;
use App\Models\Service;
use App\Models\Status;
use App\services\UserService;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use function Psr\Log\error;

class UserController extends Controller
{
    public $service;

    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = User::latest();
        $users = $query->filter($request)->paginate(20);
        $statuses = User::getStatuses();
        $roles = $this->service->getRolesList();

        return view('admin.users.index', compact('users', 'statuses', 'roles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->has('create_enrollee')) {
            $role = Role::findByName('enrollee');
            $roles = [0 => $role];
            $create_enrollee = true;
        } else {
            $roles = Role::all();
            $create_enrollee = false;
        }
        $statuses = User::getStatuses();
        $countries = Country::orderBy('name_sk')->get();
        $courses = [];
        $genders = User::getGenders();
        $martialStatuses = User::getMartialStatuses();
        return view('admin.users.create', compact('roles', 'statuses', 'countries', 'courses', 'genders', 'martialStatuses', 'create_enrollee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        $user->assignRole([$request['role_id']]);
        //$user->branches()->sync($request['branches']);
        return redirect()->route('admin.users.show', $user);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $statuses = User::getStatuses();
        $role_names = $user->getRoleNames()->implode(', ');
        $user_services = $user->services()->withPivot('contract_number')->get()->keyBy('id');

        return view('admin.users.show', compact('user', 'statuses', 'role_names', 'user_services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $statuses = User::getStatuses();
        $roles = Role::all();
        $genders = User::getGenders();
        $countries = Country::orderBy('name_sk')->get();
        $martialStatuses = User::getMartialStatuses();
        $courses = [];
        $programStatuses = Status::all();
        $services = Service::all();
        $user_services = $user->services()->withPivot('contract_number')->get()->keyBy('id');
        //dd($user_services);
        return view('admin.users.edit', compact('user', 'statuses', 'roles', 'genders', 'countries',
            'courses', 'martialStatuses', 'programStatuses', 'services', 'user_services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        if (!empty($request['password'])) {
            $this->validate($request, [
                'password' => 'required|string|min:6',
            ]);
            $data['password'] = bcrypt($request['password']);
        }
        unset($data['role_id']);
        $user->update($data);
        $user->syncRoles([$request['role_id']]);
        //$user->branches()->sync($request['branches']);
        return redirect()->route('admin.users.show', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }

    /*
     public function patientsAutocomplete(Request $request)
     {
         $search = $request->get('term');
         $patients = UserServices::getUsersByRole('Patient')->pluck('id')->toArray();
         $result = User::where('name', 'LIKE', '%'. $search. '%')->whereIn('id', $patients)->get();

         return response()->json($result);

     }
    */
}
