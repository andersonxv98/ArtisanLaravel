<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
//use Illuminate\Support\Facades\Storage;
use Illuminate\Auth\Access\Response;
//use Illuminate\Auth::user();


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define("acesso-administrador", function (User $user){
            //echo "USER: ".$user->name;
            //echo "</br>";
            echo "User.Email: ".$user->email;
            //echo "User: ".$user->role;
            return $user->email === "adm@gmail.com" ? Response::allow() : Response::deny("voxce n tem acesso");

        });


        //
    }
}
