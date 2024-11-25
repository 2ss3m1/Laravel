<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Etudiant;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed 30 fake Etudiant records
        Etudiant::factory(30)->create();

        // Optional: Seed other tables
        // $this->call(ClassesTableSeeder::class);
    }
}
