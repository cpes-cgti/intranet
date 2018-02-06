<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Role;
use App\Models\Permission;

class CampusPesqueiraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Criação dos usuários iniciais */
        User::create([
            'name' => 'Jobson Tenório',
            'email' => 'jobson.nascimento@pesqueira.ifpe.edu.br',
            'password' => bcrypt('jobso123'),
        ]);
        User::create([
            'name' => 'Wellyson Fernando',
            'email' => 'fernando.souza@pesqueira.ifpe.edu.br',
            'password' => bcrypt('welly123'),
        ]);
        User::create([
            'name' => 'Jorge Luiz',
            'email' => 'jorge.luiz@pesqueira.ifpe.edu.br',
            'password' => bcrypt('jorge123'),
        ]);

        /* Criação de papéis iniciais */
        Role::create([
            'name' => 'TIC',
            'description' => 'Perfil para profissionais de Tecnologia da Informação e comunicação.',
        ]);
        Role::create([
            'name' => 'ASCOM',
            'description' => 'Perfil para profissionais da Assessoria de Comunicação.',
        ]);
        Role::create([
            'name' => 'CGPE',
            'description' => 'Perfil para profissionais de Gestão de Pessoas.',
        ]);
        Role::create([
            'name' => 'CTUR',
            'description' => 'Perfil para profissionais da Coordenação de Turnos.',
        ]);
        Role::create([
            'name' => 'CTUR',
            'description' => 'Perfil para profissionais da Coordenação de Turnos.',
        ]);

        /* Relacionar papéis aos usuários */
        Role::find(1)->users()->attach([2, 3]);
        Role::find(2)->users()->attach([4]);
        
        /* Associa as permissões do papel TIC */
        Permission::create([
            'name' => 'post_view',
            'role_id' => '1',
        ]);

        /* Associa as permissões do papel ASCOM */
        Permission::create([
            'name' => 'post_view',
            'role_id' => '2',
        ]);
        Permission::create([
            'name' => 'post_create',
            'role_id' => '2',
        ]);
        Permission::create([
            'name' => 'post_update',
            'role_id' => '2',
        ]);
        Permission::create([
            'name' => 'post_delete',
            'role_id' => '2',
        ]);
    }
}
