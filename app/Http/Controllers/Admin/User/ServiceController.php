<?php


namespace App\Http\Controllers\Admin\User;


use App\Http\Requests\Users\StoreServiceRequest;
use App\Models\Service;
use App\Models\User;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function create(User $user)
    {
        $services = Service::all();
        return view('admin.users.services.create', compact('user', 'services'));
    }
    public function store(StoreServiceRequest $request, User $user)
    {
        $data = $request->validated();
        $user->services()->attach($data['service_id'], ['contract_number' => $data['contract_number']]);
        return redirect()->route('admin.users.payments', $user);
    }
    public function destroy(User $user, Service $service)
    {
        $user->payments()->where('service_id', $service->id)->delete();
        $user->services()->detach($service->id);
        return redirect()->route('admin.users.payments', $user);
    }
}
