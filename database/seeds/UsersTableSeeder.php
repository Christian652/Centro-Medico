<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('nome', 'Administrador')->first();
        $secretariaRole = Role::where('nome', 'Secretario')->first();
        $medicoRole = Role::where('nome', 'Medico')->first(); 

        $admin = User::create([
            'name'=>'Christian',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('guitarra652')
        ]);

        $secretaria = User::create([
            'name'=>'Simara',
            'email'=>'secretaria@gmail.com',
            'password'=>Hash::make('guitarra652')
        ]);

        $medico = User::create([
            'name'=>'Valesca',
            'email'=>'medico@gmail.com',
            'password'=>Hash::make('guitarra652')
        ]);

        $admin->roles()->attach($adminRole);
        $secretaria->roles()->attach($secretariaRole);
        $medico->roles()->attach($medicoRole);
    }
}
