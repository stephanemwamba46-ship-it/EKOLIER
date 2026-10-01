<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            'Super Administrateur',
            'Administrateur',
            'Secrétaire',
            'Comptable',
            'Surveillant',
        ];
        foreach ($roles as $role) {
            Role::create([
                'name' => $role
            ]);
        }
    }
}