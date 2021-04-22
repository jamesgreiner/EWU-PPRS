<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class AuthGates
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        //if loged in user we get the roles
        if ($user) {
            $roles            = Role::with('permissions')->get();
            $permissionsArray = [];

            //get permissions for all roles
            foreach ($roles as $role) {
                foreach ($role->permissions as $permissions) {
                    $permissionsArray[$permissions->title][] = $role->id;
                }
            }
            //then we gate define user acces T/F depending on users role type they can get access
            foreach ($permissionsArray as $title => $roles) {
                Gate::define($title, function ($user) use ($roles) {
                    return count(array_intersect($user->roles->pluck('id')->toArray(), $roles)) > 0;
                });
            }
        }

        return $next($request);
    }
}