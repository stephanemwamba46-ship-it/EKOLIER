<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\School;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Création du rôle Super Administrateur
        $role = Role::create([
            'name' => 'Super Administrateur',
            'slug' => 'super-admin'
        ]);
        // Création d'une école de test
        $school = School::create([
            'name' => 'École EKOLIER Test',
            'email' => 'contact@ekolier.test',
            'phone' => '+243000000000',
            'address' => 'Kinshasa',
            'province' => 'Kinshasa',
            'city' => 'Kinshasa',
        ]);
        // Création du compte administrateur de l'école
        $user = User::create([
            'school_id' => $school->id,
            'first_name' => 'Admin',
            'last_name' => 'EKOLIER',
            'name' => 'Admin EKOLIER',
            'email' => 'admin@ekolier.test',
            'phone' => '+243000000000',
            'password' => Hash::make('password'),
            'is_active' => true,
        ]);
        // Attribution du rôle
        $user->roles()->attach($role->id);
    }
}