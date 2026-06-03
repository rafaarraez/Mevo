<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	/*
    	* Obtener los respectivos roles de user y admin
    	*/
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        /*
        * Registrar un usuario con el rol user
        */
        // $user = new User();
        // $user->name = 'User';
        // $user->email = 'user@example.com';
        // $user->password = bcrypt('secret');
        // $user->save();
        // $user->roles()->attach($role_user);

        /*
        * Registrar un usuario con el rol admin.
        * La contraseña NO se hardcodea: se toma de ADMIN_PASSWORD (.env) y,
        * si no existe, se genera una aleatoria y se muestra por consola.
        */
        $adminEmail    = env('ADMIN_EMAIL', 'admin@conmevo.com');
        $adminPassword = env('ADMIN_PASSWORD');

        if (empty($adminPassword)) {
            $adminPassword = Str::random(16);
            $this->command->warn("Contraseña de admin generada: {$adminPassword}");
            $this->command->warn("Guárdala. Para fijarla, define ADMIN_PASSWORD en tu .env antes de sembrar.");
        }

        $user = new User();
        $user->name = 'Admin';
        $user->email = $adminEmail;
        $user->password = bcrypt($adminPassword);
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
