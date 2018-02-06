<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Post;
use App\Policies\PostPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Post::class => PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
    // Portão para acesso ao módulo de Autenticação e Autorização
        Gate::define('auth_gate', function ($user) {
            return $user->hasPermission('user_view')
                || $user->hasPermission('role_view');
        });
        // Portão para o CRUD de Usuários (User)
        Gate::define('user_gate', function ($user) {
            return $user->hasPermission('user_view');
        });
        // Portão para o CRUD de Perfis (User)
        Gate::define('role_gate', function ($user) {
            return $user->hasPermission('role_view');
        });

    // Portão para acesso ao módulo de Gestão de Pessoas
        Gate::define('people_management_gate', function ($user) {
            return $user->hasPermission('government_employee_view')
                || $user->hasPermission('department_view');
        });
        // Portão para o CRUD de Servidores Públicos (GovernmentEmployee)
        Gate::define('government_employee_gate', function ($user) {
            return $user->hasPermission('government_employee_view');
        });
        // Portão para o CRUD de Departamentos (Department)
        Gate::define('department_gate', function ($user) {
            return $user->hasPermission('department_view');
        });

    // Portão para acesso ao Compensação de aulas
        Gate::define('class_compensation_gate', function ($user) {
            return $user->hasPermission('absence_view');
        });
        // Portão para o CRUD de Faltas (Absence)
        Gate::define('absence_gate', function ($user) {
            return $user->hasPermission('absence_view');
        });

    // Portão para acesso ao módulo de Acesso ao campus
        Gate::define('restricted_access_gate', function ($user) {
            return $user->hasPermission('person_view')
                || $user->hasPermission('private_vehicle_view');
        });
        // Portão para o CRUD de Pessoas (Person)
        Gate::define('person_gate', function ($user) {
            return $user->hasPermission('person_view');
        });
        // Portão para o CRUD de Veículos particulares (PrivateVehicle)
        Gate::define('private_vehicle_gate', function ($user) {
            return $user->hasPermission('private_vehicle_view');
        });

    // Portão para acesso ao módulo de Transportes
        Gate::define('transports_gate', function ($user) {
            return $user->hasPermission('driver_view')
                || $user->hasPermission('vehicle_view')
                || $user->hasPermission('request_vehicle_gate')
                || $user->hasPermission('travel_approve_gate')
                || $user->hasPermission('travel_schedule_gate')
                || $user->hasPermission('travel_register_gate');
        });
        // Portão para o CRUD de Motoristas (Driver)
        Gate::define('driver_gate', function ($user) {
            return $user->hasPermission('driver_view');
        });
        // Portão para o CRUD de Veículos (Vehicle)
        Gate::define('vehicle_gate', function ($user) {
            return $user->hasPermission('vehicle_view');
        });
        // Portão para a função de solicitar transporte
        Gate::define('request_vehicle_gate', function ($user) {
            return $user->hasPermission('request_vehicle_gate');
        });
        // Portão para a função de Aprovar viagem
        Gate::define('travel_approve_gate', function ($user) {
            return $user->hasPermission('travel_approve_gate');
        });
        // Portão para a função de Agendar Viagem
        Gate::define('travel_schedule_gate', function ($user) {
            return $user->hasPermission('travel_schedule_gate');
        });
        // Portão para a função de Registrar Viagem
        Gate::define('travel_register_gate', function ($user) {
            return $user->hasPermission('travel_register_gate');
        });

    // Portão para acesso ao módulo de Notícias
        Gate::define('news_gate', function ($user) {
            return $user->hasPermission('post_view');
        });
        // Portão para o CRUD de notícias (Post)
        Gate::define('post_gate', function ($user) {
            return $user->hasPermission('post_view');
        });

    }
}
