<?php


namespace App\services;


use App\Models\User;

class UserService
{
    public function getRolesList()
    {
        $roles_data = \Spatie\Permission\Models\Role::all();

        $roles = ['' => __('app.Any')];
        foreach ($roles_data as $id => $role) {
            $roles[$role->id] = $role->name;
        }
        return $roles;
    }
    public function syncServices(User $user, $data)
    {
        $services = [];
        if (isset($data['services'])) {
            foreach (array_keys($data['services']) as $service_id) {
                if (isset($data['contract_numbers'][$service_id])) {
                    $services[$service_id] = ['contract_number' => $data['contract_numbers'][$service_id]];
                }
            }
        }
        $user->services()->sync($services);
    }
}
