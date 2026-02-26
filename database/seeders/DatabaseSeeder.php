<?php
namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Sembradores de datos falsos
        // User::create([
        //     'name' => 'Administrador',
        //     'email' => 'administrador@clivet.com',
        //     'password' => Hash::make('test123'),
        // ]);

        // User::create([
        //     'name' => 'Secretaria',
        //     'email' => 'secretaria@clivet.com',
        //     'password' => Hash::make('test123'),
        // ]);

        // User::create([
        //     'name' => 'Doctora',
        //     'email' => 'doctora@clivet.com',
        //     'password' => Hash::make('test123'),
        // ]);

        // User::create([
        //     'name' => 'Paciente',
        //     'email' => 'paciente@gmail.com',
        //     'password' => Hash::make('test123'),
        // ]);

        $this->call([PacienteSeeder::class,]);
    }
}

// Correr con php artisan db:seed
