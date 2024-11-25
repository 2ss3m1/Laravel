<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classes')->insert([
            ['libelle' => '6ème'],
            ['libelle' => '5ème'],
            ['libelle' => '4ème'],
            ['libelle' => '3ème'],
            ['libelle' => '2ème'],
            ['libelle' => '1ère'],
        ]);
    }
}
